<div class="table-responsive">
    <table class="table" id="hotelreservationforms-table">
        <thead>
            <tr>
                <th>Fullname</th>
        <th>Address</th>
        <th>Telephone</th>
        <th>Email</th>
        <th>Roomtype</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($hotelreservationforms as $hotelreservationform)
            <tr>
                <td>{{ $hotelreservationform->fullname }}</td>
            <td>{{ $hotelreservationform->address }}</td>
            <td>{{ $hotelreservationform->Telephone }}</td>
            <td>{{ $hotelreservationform->Email }}</td>
            <td>{{ $hotelreservationform->Roomtype }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['hotelreservationforms.destroy', $hotelreservationform->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('hotelreservationforms.show', [$hotelreservationform->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('hotelreservationforms.edit', [$hotelreservationform->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
