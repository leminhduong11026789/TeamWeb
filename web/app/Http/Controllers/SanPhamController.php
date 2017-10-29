<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSanPhamRequest;
use App\Http\Requests\UpdateSanPhamRequest;
use App\Models\MoTaSanPham;
use App\Repositories\DanhMucSanPhamRepository;
use App\Repositories\MoTaSanPhamRepository;
use App\Repositories\SanPhamRepository;
use Illuminate\Http\Request;
use Flash;
use Response;

class SanPhamController extends AppBaseController
{
    /** @var  SanPhamRepository */
    private $sanPhamRepository;
    private $danhMucSanPhamRepository;
    private $moTaSanPhamRepository;

    public function __construct(MoTaSanPhamRepository $moTaSanPhamRepo,DanhMucSanPhamRepository $danhMucSanPhamRepo,SanPhamRepository $sanPhamRepo)
    {
        $this->moTaSanPhamRepository = $moTaSanPhamRepo;
        $this->danhMucSanPhamRepository = $danhMucSanPhamRepo;
        $this->sanPhamRepository = $sanPhamRepo;
    }

    /**
     * Display a listing of the SanPham.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $search=$request->search;
        if(!empty($search)){
            $sanPhams=$this->sanPhamRepository->findByField('ten','LIKE','%'.$search['name'].'%',['*'],true,10);
        }
        else{
            $sanPhams = $this->sanPhamRepository->paginate(10);
        }

        return view('backend.san_phams.index')
            ->with('sanPhams', $sanPhams);
    }

    /**
     * Show the form for creating a new SanPham.
     *
     * @return Response
     */
    public function create()
    {
        $categories=$this->danhMucSanPhamRepository->all();
        return view('backend.san_phams.create',compact('categories'));
    }

    /**
     * Store a newly created SanPham in storage.
     *
     * @param CreateSanPhamRequest $request
     *
     * @return Response
     */
    public function store(CreateSanPhamRequest $request)
    {
        $input = $request->all();
        $category_ids = $request->category_ids;
        if($category_ids){
            $input['danh_muc_id'] = $category_ids[0];
        }
        else{
            Flash::error('Chon Danh Muc');
            return back()->withInput();
        }
        if (!empty($input['anh'])) {
            $imageName = time().'.'.transText($request->anh->getClientOriginalName(),'-');
            $request->anh->move(public_path('uploads/image_sanpham'), $imageName);
            $request->anh = $imageName;
            $input['anh'] = '/uploads/image_sanpham/'.$imageName;
        }

        if (!empty($input['anh_demo'])) {
            $imageName = time().'.'.transText($request->anh_demo->getClientOriginalName(),'-');
            $request->anh_demo->move(public_path('uploads/image_sanpham'), $imageName);
            $request->anh_demo = $imageName;
            $input['anh_demo'] = '/uploads/image_sanpham/'.$imageName;
        }


        $sanPham = $this->sanPhamRepository->create($input);
        $allDescription = $request->description;
        foreach ($allDescription as $order=>$content){
            $mota = new MoTaSanPham();
            $mota->san_pham_id = $sanPham->id;
            $mota->content = $content;
            $mota->order = $order;
            $mota->save();
        }
        Flash::success(__('messages.san_pham_saved'));
        if($input['save']==='save_edit'){
            return redirect(route('admin.sanPhams.edit', $sanPham->id));
        }
        elseif ($input['save']==='save_new'){
            return redirect(route('admin.sanPhams.create'));
        }
        else{
            return redirect(route('admin.sanPhams.index'));
        }
    }

    /**
     * Display the specified SanPham.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sanPham = $this->sanPhamRepository->findWithoutFail($id);

        if (empty($sanPham)) {
            Flash::error('San Pham not found');

            return redirect(route('admin.sanPhams.index'));
        }

        return view('backend.san_phams.show')->with('sanPham', $sanPham);
    }

    /**
     * Show the form for editing the specified SanPham.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sanPham = $this->sanPhamRepository->findWithoutFail($id);

        if (empty($sanPham)) {
            Flash::error(__('messages.san_pham_not_found'));

            return redirect(route('admin.sanPhams.index'));
        }
        $categories = $this->danhMucSanPhamRepository->all();
        $allDescription = $this->moTaSanPhamRepository->orderBy('order','asc')->findByField('san_pham_id','=',$sanPham->id,['*'],false);

        return view('backend.san_phams.edit',compact('categories','allDescription'))->with('sanPham', $sanPham);
    }

    /**
     * Update the specified SanPham in storage.
     *
     * @param  int              $id
     * @param UpdateSanPhamRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSanPhamRequest $request)
    {
        $sanPham = $this->sanPhamRepository->findWithoutFail($id);

        if (empty($sanPham)) {
            Flash::error(__('messages.san_pham_not_found'));

            return redirect(route('admin.sanPhams.index'));
        }
        $input = $request->all();

        $category_ids = $request->category_ids;
        if($category_ids){
            $input['danh_muc_id'] = $category_ids[0];
        }
        else{
            Flash::error(__('messages.no_select_category'));
            return back()->withInput();
        }

        if($request->anh==null){
            $input['anh'] = $sanPham->anh;
        }
        else{
            $imageName = time().'.'.transText($request->anh->getClientOriginalName(),'-');
            $request->anh->move(public_path('uploads/image_sanpham'), $imageName);
            $request->anh = $imageName;
            $input['anh'] = '/uploads/image_sanpham/'.$imageName;
        }

        if($request->anh_demo==null){
            $input['anh_demo'] = $sanPham->anh_demo;
        }
        else{
            $imageName = time().'.'.transText($request->anh_demo->getClientOriginalName(),'-');
            $request->anh_demo->move(public_path('uploads/image_sanpham'), $imageName);
            $request->anh_demo = $imageName;
            $input['anh_demo'] = '/uploads/image_sanpham/'.$imageName;
        }

        $allDescription = $request->description;

        $removeAllDescription = $this->moTaSanPhamRepository->findByField('san_pham_id','=',$sanPham->id,['*'],false);
        foreach ($removeAllDescription as $description){
            $this->moTaSanPhamRepository->delete($description->id);
        }
        foreach ($allDescription as $order=>$content){
            $mota = new MoTaSanPham();
            $mota->san_pham_id = $sanPham->id;
            $mota->content = $content;
            $mota->order = $order;
            $mota->save();
        }
        $sanPham = $this->sanPhamRepository->update($input, $id);

        Flash::success(__('messages.san_pham_updated'));
        if($input['save']==='save_edit'){
            return redirect(route('admin.sanPhams.edit', $sanPham->id));
        }
        elseif ($input['save']==='save_new'){
            return redirect(route('admin.sanPhams.create'));
        }
        else{
            return redirect(route('admin.sanPhams.index'));
        }
    }

    /**
     * Remove the specified SanPham from storage.
     *
     * @param  int $id
     *
     * @return Response
     */

    public function deleteMota($id){
        $removeAllDescription = $this->moTaSanPhamRepository->findByField('san_pham_id','=',$id,['*'],false);
        foreach ($removeAllDescription as $description){
            $this->moTaSanPhamRepository->delete($description->id);
        }
    }

    private function checkSanPham($ids){
        foreach ($ids as $id){
            $sanpham = $this->sanPhamRepository->findWithoutFail($id);
            if (empty($sanpham)) {
                return false;
            }
        }
        return true;
    }

    public function destroy($id, Request $request)
    {
        if($id=='MULTI'){
            if($request->ids!=null){
                // Neu xuat hien loi khong xoa gi ca. Đưa ra lỗi
                if($this->checkSanPham($request->ids)){
                    foreach ($request->ids as $id){
                        $this->deleteMota($id);
                    }
                    $this->sanPhamRepository->destroy_multiple($request->ids);
                    Flash::success(__('messages.san_pham_deleted'));
                }
                else{
                    Flash::error(__('messages.san_pham_not_found '));
                }
                return redirect(route('admin.sanPhams.index'));
            }
            else{
                Flash::error(__('messages.no_value_select'));
                return redirect(route('admin.sanPhams.index'));
            }
        }
        else{

            $sanPham = $this->sanPhamRepository->findWithoutFail($id);

            if (empty($sanPham)) {
                Flash::error(__('messages.san_pham_not_found '));

                return redirect(route('admin.sanPhams.index'));
            }
            $this->deleteMota($sanPham->id);
            $this->sanPhamRepository->delete($id);

            Flash::success(__('messages.san_pham_deleted'));

            return redirect(route('admin.sanPhams.index'));
        }

    }
}
