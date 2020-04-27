@extends('layouts.app')

@section('content')
    @include('common.errors')
    <div class="row">
        <div class="col-sm-8">
        <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="container" style="height: auto;">
                            <button type="button"  style="margin-top:5%" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Ajouter RDV
                            </button>
                        <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        @include('rdv')

                                    </div>
                                </div>
                            </div>
                        </div>
                        @if (count($rdv) > 0)
                        <table id="table" 
                            data-toggle="table"
                            data-search="true"
                            data-filter-control="true" 
                            data-show-export="true"
                            data-click-to-select="true"
                            data-toolbar="#toolbar"
                            style="height: auto;">
                            <thead>
                                <tr>
                                
                                <th data-field="name" data-filter-control="input" data-sortable="true"> Nom et Prénom</th>
                                <th data-field="date" data-filter-control="input" data-sortable="true">Date</th>
                                <th data-field="heure" data-filter-control="input" data-sortable="true">Heure</th>
                                <th data-field="objet" data-filter-control="input" data-sortable="true">Objet</th>
                                <th data-field="info" data-filter-control="input" data-sortable="true">Infos médicale</th>
                                <th data-field="id"  style="display:none"></th>
                                <th data-formatter="TableActions" >Modifier</th>
                                <th  data-formatter="TableActions1">Imprimer</th>
                                <th  data-formatter="TableActions2">Supprimer</th>
                                </tr>

                            </thead>
                            <tbody>
                                @foreach ($rdv as $r)
                                    <tr >
                                    <td  class='clickable-row' data-href='/rdv/{{$r->id}}'>{{App\Patient::find($r->id)->name}} {{App\Patient::find($r->id)->firstName}}</td>
                                    <td class='clickable-row' data-href='/rdv/{{$r->id}}'>{{ $r->date }}</td>
                                    <td class='clickable-row' data-href='/rdv/{{$r->id}}'>{{ $r->time }}</td>
                                    <td class='clickable-row' data-href='/rdv/{{$r->id}}'>{{ $r->object }}</td>
                                    <td class='clickable-row' data-href='/rdv/{{$r->id}}'>information médicale</td>
                                    <td class="cell100 column5">{{$r->id}}</td>
                                    
                                    </tr>
                                    <div class="modal fade" id="example{{$r->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Modifier</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="/rdvs/{{$r->id}}" method="POST">
                                                        {{ csrf_field() }}
                                                        <input name="id" value="{{$r->id}} " />
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label">Date:</label>
                                                            <input type="date" name="date" class="form-control" id="recipient-name"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="message-text" class="col-form-label">Heure</label>
                                                            <input type="time" name="time" class="form-control" id="recipient-name"/>
                                                        </div>
                                                        <button type="submit" class="btn btn-secondary" ></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                @endforeach
                                    
                            </tbody>
                        </table>
                        @endif
                    </div>

                    <script type="text/javascript"> 
                    var $table = $('#table');
                        $(function () {
                            $('#toolbar').find('select').change(function () {
                                $table.bootstrapTable('refreshOptions', {
                                    exportDataType: $(this).val()
                                });
                            });
                        })
                        var trBoldBlue = $("table");
                    $(trBoldBlue).on("click", "tr", function (){
                        $(this).toggleClass("bold-blue");
                    });
                    jQuery(document).ready(function($) {
                        $(".clickable-row").click(function() {
                            window.location = $(this).data("href");
                        });
                    });
        
                    </script>
                </div>
            </div>
        </div>
         
    </div>
        </div>
        
    </div>
    <div class="col-sm-4">
         <div class="text-center">
                    <h5>RDV du jour</h5>
                    @include('todayRdv')
         </div>
        </div>
        </div>
    
    
    
   
   
<script>

function TableActions (value, row, index) {
    
    return [
        
        '<button class="btn btn-primary" data-toggle="modal" data-target="#example'+row.id+' "data-whatever="@mdo"><i class="fa fa-edit"></i></button>'
    ].join('');
}

function TableActions2 (value, row, index) {
    return [
  
        '<form action="/rdvs/'+row.id+'" method="POST" class="form-horizontal"> {{ csrf_field() }}{{ method_field("DELETE") }}<button  class="btn btn-danger"><i class="fa fa-trash"></i></button>',
       
    ].join('');
}

function TableActions1 (value, row, index) {
    return [
  
        '<form action="/rdvs/'+row.id+'/print" method="POST">{{ csrf_field()}}<button type="submit" class="btn btn-primary"><i class="fa fa-print"></i></button></form>',
       
    ].join('');
}
</script>

                
@endsection




