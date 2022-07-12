<table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Meno a Priezvisko</th>
            <th scope="col">Adresa</th>
            <th scope="col">Tel.:</th>
            <th scope="col">Email</th>
            <th scope="col">Dátum</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($users as $user)
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->first_name . ' '. $user->last_name }}</td>
                <td>{{ $user->adresa }}</td>
                <td>{{ $user->phone }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->dateFormat }}</td>
            </tr>

        @empty

            <tr>
                Tabuľka je prázdna
            </tr>
        @endforelse


    </tbody>
</table>
