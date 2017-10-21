<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDanhMucSanPhamRequest;
use App\Http\Requests\UpdateDanhMucSanPhamRequest;
use App\Repositories\DanhMucSanPhamRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class DanhMucSanPhamController extends AppBaseController
{
    /** @var  DanhMucSanPhamRepository */
    private $danhMucSanPhamRepository;

    public function __construct(DanhMucSanPhamRepository $danhMucSanPhamRepo)
    {
        $this->danhMucSanPhamRepository = $danhMucSanPhamRepo;
    }

    /**
     * Display a listing of the DanhMucSanPham.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $search=$request->search;
        if(!empty($search)){
            $danhMucSanPhams=$this->danhMucSanPhamRepository->findByField('ten','LIKE','%'.$search['name'].'%',['*'],true,10);
        }
        else{
            $danhMucSanPhams = $this->danhMucSanPhamRepository->paginate(10);
        }
        return view('backend.danh_muc_san_phams.index')
            ->with('danhMucSanPhams', $danhMucSanPhams);

    }

    /**
     * Show the form for creating a new DanhMucSanPham.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.danh_muc_san_phams.create');
    }

    /**
     * Store a newly created DanhMucSanPham in storage.
     *
     * @param CreateDanhMucSanPhamRequest $request
     *
     * @return Response
     */
    public function store(CreateDanhMucSanPhamRequest $request)
    {
        $input = $request->all();

        $danhMucSanPham = $this->danhMucSanPhamRepository->create($input);

        Flash::success('Thêm mới thành công một danh mục sản phẩm');
        if($input['save']==='save_edit'){
            return redirect(route('admin.danhMucSanPhams.edit', $danhMucSanPham->id));
        }
        elseif ($input['save']==='save_new'){
            return redirect(route('admin.danhMucSanPhams.create'));
        }
        else{
            return redirect(route('admin.danhMucSanPhams.index'));
        }
    }

    /**
     * Display the specified DanhMucSanPham.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $danhMucSanPham = $this->danhMucSanPhamRepository->findWithoutFail($id);

        if (empty($danhMucSanPham)) {
            Flash::error('Không tìm thấy danh mục tương ứng');

            return redirect(route('admin.danhMucSanPhams.index'));
        }

        return view('backend.danh_muc_san_phams.show')->with('danhMucSanPham', $danhMucSanPham);
    }

    /**
     * Show the form for editing the specified DanhMucSanPham.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $danhMucSanPham = $this->danhMucSanPhamRepository->findWithoutFail($id);

        if (empty($danhMucSanPham)) {
            Flash::error('Không tìm thấy danh mục tương ứng');

            return redirect(route('admin.danhMucSanPhams.index'));
        }

        return view('backend.danh_muc_san_phams.edit')->with('danhMucSanPham', $danhMucSanPham);
    }

    /**
     * Update the specified DanhMucSanPham in storage.
     *
     * @param  int              $id
     * @param UpdateDanhMucSanPhamRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDanhMucSanPhamRequest $request)
    {
        $danhMucSanPham = $this->danhMucSanPhamRepository->findWithoutFail($id);

        if (empty($danhMucSanPham)) {
            Flash::error('Không tìm thấy danh mục tương ứng');

            return redirect(route('admin.danhMucSanPhams.index'));
        }

        $danhMucSanPham = $this->danhMucSanPhamRepository->update($request->all(), $id);

        Flash::success('Cập nhật thành công thông tin danh mục sản phẩm');
        if($request->all()['save']==='save_edit'){
            return redirect(route('admin.danhMucSanPhams.edit', $danhMucSanPham->id));
        }
        elseif ($request->all()['save']==='save_new'){
            return redirect(route('admin.danhMucSanPhams.create'));
        }
        else{
            return redirect(route('admin.danhMucSanPhams.index'));
        }
    }

    /**
     * Remove the specified DanhMucSanPham from storage.
     *
     * @param  int $id
     *
     * @return Response
     */

    private function checkDanhMuc($ids){
        foreach ($ids as $id){
            $danhmuc = $this->danhMucSanPhamRepository->findWithoutFail($id);
            if (empty($danhmuc)) {
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
                if($this->checkDanhMuc($request->ids)){
                    $this->danhMucSanPhamRepository->destroy_multiple($request->ids);
                    Flash::success(__("messages.dmsp_deleted"));
                }
                else{
                    Flash::error(__("messages.dmsp_not_found"));
                }
                return redirect(route('admin.danhMucSanPhams.index'));
            }
            else{
                Flash::error(__("messages.no_value_select"));
                return redirect(route('admin.danhMucSanPhams.index'));
            }
        }
        else{
            $danhMucSanPham = $this->danhMucSanPhamRepository->findWithoutFail($id);

            if (empty($danhMucSanPham)) {
                Flash::error(__('messages.dmsp_not_found'));

                return redirect(route('admin.danhMucSanPhams.index'));
            }

            $this->danhMucSanPhamRepository->delete($id);

            Flash::success(__('messages.dmsp_deleted'));

            return redirect(route('admin.danhMucSanPhams.index'));
        }
    }

    public function exportToFile(){
        return;
    }

}
