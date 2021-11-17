<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatehotelreservationformRequest;
use App\Http\Requests\UpdatehotelreservationformRequest;
use App\Repositories\hotelreservationformRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class hotelreservationformController extends AppBaseController
{
    /** @var  hotelreservationformRepository */
    private $hotelreservationformRepository;

    public function __construct(hotelreservationformRepository $hotelreservationformRepo)
    {
        $this->hotelreservationformRepository = $hotelreservationformRepo;
    }

    /**
     * Display a listing of the hotelreservationform.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $hotelreservationforms = $this->hotelreservationformRepository->all();

        return view('hotelreservationforms.index')
            ->with('hotelreservationforms', $hotelreservationforms);
    }

    /**
     * Show the form for creating a new hotelreservationform.
     *
     * @return Response
     */
    public function create()
    {
        return view('hotelreservationforms.create');
    }

    /**
     * Store a newly created hotelreservationform in storage.
     *
     * @param CreatehotelreservationformRequest $request
     *
     * @return Response
     */
    public function store(CreatehotelreservationformRequest $request)
    {
        $input = $request->all();

        $hotelreservationform = $this->hotelreservationformRepository->create($input);

        Flash::success('Hotelreservationform saved successfully.');

        return redirect(route('hotelreservationforms.index'));
    }

    /**
     * Display the specified hotelreservationform.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $hotelreservationform = $this->hotelreservationformRepository->find($id);

        if (empty($hotelreservationform)) {
            Flash::error('Hotelreservationform not found');

            return redirect(route('hotelreservationforms.index'));
        }

        return view('hotelreservationforms.show')->with('hotelreservationform', $hotelreservationform);
    }

    /**
     * Show the form for editing the specified hotelreservationform.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $hotelreservationform = $this->hotelreservationformRepository->find($id);

        if (empty($hotelreservationform)) {
            Flash::error('Hotelreservationform not found');

            return redirect(route('hotelreservationforms.index'));
        }

        return view('hotelreservationforms.edit')->with('hotelreservationform', $hotelreservationform);
    }

    /**
     * Update the specified hotelreservationform in storage.
     *
     * @param int $id
     * @param UpdatehotelreservationformRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatehotelreservationformRequest $request)
    {
        $hotelreservationform = $this->hotelreservationformRepository->find($id);

        if (empty($hotelreservationform)) {
            Flash::error('Hotelreservationform not found');

            return redirect(route('hotelreservationforms.index'));
        }

        $hotelreservationform = $this->hotelreservationformRepository->update($request->all(), $id);

        Flash::success('Hotelreservationform updated successfully.');

        return redirect(route('hotelreservationforms.index'));
    }

    /**
     * Remove the specified hotelreservationform from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $hotelreservationform = $this->hotelreservationformRepository->find($id);

        if (empty($hotelreservationform)) {
            Flash::error('Hotelreservationform not found');

            return redirect(route('hotelreservationforms.index'));
        }

        $this->hotelreservationformRepository->delete($id);

        Flash::success('Hotelreservationform deleted successfully.');

        return redirect(route('hotelreservationforms.index'));
    }
}
