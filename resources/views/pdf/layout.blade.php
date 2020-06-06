<!DOCTYPE html>

@include('layout.head')

<div class="{{$logout?"d-none":""}} col-md-12">
    <a  href="{{url('logout')}}">Logout</a>
    <a  href="{{url('dashboard')}}">Back</a>
</div>

<div style="margin:0 60px; border: 1px solid grey">
    <div class="bg">
        <div class="pt-5 col-12 text-right">
            Ignition LTD,
            5 Broad Lane,
            Bracknell,
            tel. 4434 4343 434

        </div>
        <p class="text-uppercase text-center pb-5 pt-5"> activity and user comments report</p>

    </div>

    <div class="col-md-12">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>E-Mail</th>
                    <th>Comment</th>
                </tr>
            </thead>
            <tbody>
                @foreach($persons as $person)
                <tr>
                    <td>{{$person->id}}</td>
                    <td>{{$person->name}}</td>
                    <td>{{$person->email}}</td>
                    <td>{{$person->comment}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <div class="bg">
        <p class="text-uppercase pt-5 pb-5 mt-4 text-center"> Report date: <br>({{date('Y-m-d')}})</p>
    </div>
    <div class="text-center">
        @if($flow==='view')
        {{ $persons->links() }}
        @endif
    </div>
</div>
