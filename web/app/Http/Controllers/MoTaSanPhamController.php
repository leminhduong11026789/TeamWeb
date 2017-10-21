<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMoTaSanPhamRequest;
use App\Http\Requests\UpdateMoTaSanPhamRequest;
use App\Repositories\MoTaSanPhamRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class MoTaSanPhamController extends AppBaseController
{
    /** @var  MoTaSanPhamRepository */
    private $moTaSanPhamRepository;

    public function __construct(MoTaSanPhamRepository $moTaSanPhamRepo)
    {
        $this->moTaSanPhamRepository = $moTaSanPhamRepo;
    }

    /**
     * Display a listing of the MoTaSanPham.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->moTaSanPhamRepository->pushCriteria(new RequestCriteria($request));
        $moTaSanPhams = $this->moTaSanPhamRepository->all();

        return view('backend.mo_ta_san_phams.index')
            ->with('moTaSanPhams', $moTaSanPhams);
    }

    /**
     * Show the form for creating a new MoTaSanPham.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.mo_ta_san_phams.create');
    }

    /**
     * Store a newly created MoTaSanPham in storage.
     *
     * @param CreateMoTaSanPhamRequest $request
     *
     * @return Response
     */
    public function store(CreateMoTaSanPhamRequest $request)
    {
        $input = $request->all();

        $moTaSanPham = $this->moTaSanPhamRepository->create($input);

        Flash::success('Mo Ta San Pham saved successfully.');

        return redirect(route('admin.moTaSanPhams.index'));
    }

    /**
     * Display the specified MoTaSanPham.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $moTaSanPham = $this->moTaSanPhamRepository->findWithoutFail($id);

        if (empty($moTaSanPham)) {
            Flash::error('Mo Ta San Pham not found');

            return redirect(route('admin.moTaSanPhams.index'));
        }

        return view('backend.mo_ta_san_phams.show')->with('moTaSanPham', $moTaSanPham);
    }

    /**
     * Show the form for editing the specified MoTaSanPham.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $moTaSanPham = $this->moTaSanPhamRepository->findWithoutFail($id);

        if (empty($moTaSanPham)) {
            Flash::error('Mo Ta San Pham not found');

            return redirect(route('admin.moTaSanPhams.index'));
        }

        return view('backend.mo_ta_san_phams.edit')->with('moTaSanPham', $moTaSanPham);
    }

    /**
     * Update the specified MoTaSanPham in storage.
     *
     * @param  int              $id
     * @param UpdateMoTaSanPhamRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMoTaSanPhamRequest $request)
    {
        $moTaSanPham = $this->moTaSanPhamRepository->findWithoutFail($id);

        if (empty($moTaSanPham)) {
            Flash::error('Mo Ta San Pham not found');

            return redirect(route('admin.moTaSanPhams.index'));
        }

        $moTaSanPham = $this->moTaSanPhamRepository->update($request->all(), $id);

        Flash::success('Mo Ta San Pham updated successfully.');

        return redirect(route('admin.moTaSanPhams.index'));
    }

    /**
     * Remove the specified MoTaSanPham from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $moTaSanPham = $this->moTaSanPhamRepository->findWithoutFail($id);

        if (empty($moTaSanPham)) {
            Flash::error('Mo Ta San Pham not found');

            return redirect(route('admin.moTaSanPhams.index'));
        }

        $this->moTaSanPhamRepository->delete($id);

        Flash::success('Mo Ta San Pham deleted successfully.');

        return redirect(route('admin.moTaSanPhams.index'));
    }
}
