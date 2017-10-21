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
        $this->danhMucSanPhamRepository->pushCriteria(new RequestCriteria($request));
        $danhMucSanPhams = $this->danhMucSanPhamRepository->all();

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

        Flash::success('Danh Muc San Pham saved successfully.');

        return redirect(route('admin.danhMucSanPhams.index'));
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
            Flash::error('Danh Muc San Pham not found');

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
            Flash::error('Danh Muc San Pham not found');

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
            Flash::error('Danh Muc San Pham not found');

            return redirect(route('admin.danhMucSanPhams.index'));
        }

        $danhMucSanPham = $this->danhMucSanPhamRepository->update($request->all(), $id);

        Flash::success('Danh Muc San Pham updated successfully.');

        return redirect(route('admin.danhMucSanPhams.index'));
    }

    /**
     * Remove the specified DanhMucSanPham from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $danhMucSanPham = $this->danhMucSanPhamRepository->findWithoutFail($id);

        if (empty($danhMucSanPham)) {
            Flash::error('Danh Muc San Pham not found');

            return redirect(route('admin.danhMucSanPhams.index'));
        }

        $this->danhMucSanPhamRepository->delete($id);

        Flash::success('Danh Muc San Pham deleted successfully.');

        return redirect(route('admin.danhMucSanPhams.index'));
    }
}
