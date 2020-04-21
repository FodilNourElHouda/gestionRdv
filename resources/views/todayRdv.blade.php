
    
    <div class="content">
        <div class="row">
            <div class="col-md-12">
            <p>{{$today}}</p>
            @if (count($todayRdv) > 0)
                @foreach ($todayRdv as $r)
                <a href="/rdv/{{$r->id}}">
                <div class="card">
                    <div class="card-body">
                        <div class="container" style="height: auto;">
                            <div class='row'>   
                                <div class='col-sm-6'>   
                                    <p>{{App\Patient::find($r->id)->name}} {{App\Patient::find($r->id)->firstName}}</p>
                                </div>
                                <div class='col-sm-6'>   
                                    <p>{{$r->time}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </a>
                @endforeach
            @endif
            </div>
         
        </div>
    </div>
        
    
    
    


