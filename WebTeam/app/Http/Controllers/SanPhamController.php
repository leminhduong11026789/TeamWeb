<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSanPhamRequest;
use App\Http\Requests\UpdateSanPhamRequest;
use App\Repositories\SanPhamRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class SanPhamController extends AppBaseController
{
    /** @var  SanPhamRepository */
    private $sanPhamRepository;

    public function __construct(SanPhamRepository $sanPhamRepo)
    {
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
//        $this->sanPhamRepository->pushCriteria(new RequestCriteria($request));
        $sanPhams = $this->sanPhamRepository->all();

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
        return view('backend.san_phams.create');
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

        $sanPham = $this->sanPhamRepository->create($input);

        Flash::success('San Pham saved successfully.');

        return redirect(route('admin.sanPhams.index'));
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
            Flash::error('San Pham not found');

            return redirect(route('admin.sanPhams.index'));
        }

        return view('backend.san_phams.edit')->with('sanPham', $sanPham);
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
            Flash::error('San Pham not found');

            return redirect(route('admin.sanPhams.index'));
        }

        $sanPham = $this->sanPhamRepository->update($request->all(), $id);

        Flash::success('San Pham updated successfully.');

        return redirect(route('admin.sanPhams.index'));
    }

    /**
     * Remove the specified SanPham from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sanPham = $this->sanPhamRepository->findWithoutFail($id);

        if (empty($sanPham)) {
            Flash::error('San Pham not found');

            return redirect(route('admin.sanPhams.index'));
        }

        $this->sanPhamRepository->delete($id);

        Flash::success('San Pham deleted successfully.');

        return redirect(route('admin.sanPhams.index'));
    }
}
