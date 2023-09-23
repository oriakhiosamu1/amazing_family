<div class="row">

    <div class="col-lg-12">

        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        @php
                            $count = 1;
                        @endphp

                        <th>S/N</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Admin</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- When user table occupied --}}
                    @forelse ($users as $user)
                        <tr>
                            <td>{{ $count++ }}</td>
                            <td><span class="label label-danger">{{ $user->name }}</span></td>
                            <td>{{ $user->email }}</td>

                            @if ($user->isAdmin == 0)
                                <td>False</td>
                            @else
                               <td>True</td> 
                            @endif
                            {{-- <td>{{ $user->isAdmin }}</td> --}}
                        </tr>
                    @empty
                        {{-- When user table is empty --}}
                        <tr>
                            <td>1</td>
                            <td><span class="label label-danger">Mark</span></td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>




    </div>

</div>