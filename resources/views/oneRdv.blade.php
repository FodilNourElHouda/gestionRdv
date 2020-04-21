@extends('layouts.app')

@section('content')
    
    <div class="content">
        <div class="row">
            <div class="col-md-12">
          
                <div class="card">
                    <div class="card-body">
                        <div class="container" style="height: auto;">
                            <div class='row'>   
                                <div class='col-sm-12'>   
                                    <p>objet: {{$r->object}}</p>
                                </div>

                            </div>
                            <div class='row'>   
                                        <div class='col-sm-6'>   
                                            <p>date: {{$r->date}}</p>
                                        </div>
                                        <div class='col-sm-6'>   
                                            <p>heure: {{$r->time}}</p>
                                        </div>
                                    </div>

                            <p> information du patient</p>
                            <div class='row'>   
                                <div class='col-sm-6'>   
                                    <p> nom:  {{App\Patient::find($r->id)->name}} </p>
                                </div>
                                <div class='col-sm-6'>   
                                    <p> prénom : {{App\Patient::find($r->id)->firstName}}</p>
                                </div>
                            </div>
                            <div class='row'>   
                                <div class='col-sm-12'>   
                                    <p>adresse: {{App\Patient::find($r->id)->adresee}} </p>
                                </div>
                            </div>
                            <div class='row'>   
                                <div class='col-sm-12'>   
                                    <p>numéro: {{App\Patient::find($r->id)->number}} </p>
                                </div>
                            </div>
                            <div class='row'>   
                                <div class='col-sm-12'>   
                                    <p>mail: {{App\Patient::find($r->id)->mail}} </p>
                                </div>
                            </div>
                            <div class='row'>   
                                
                                    <p> information midécale:   </p>
                                
                                
                            </div>
                            <div class='row'>   
                                <div class='col-sm-6'>   
                                    <small>crée le:</small>
                                </div>
                                <div class='col-sm-6'>   
                                    <small>modifié le:</small>
                                </div>
                            </div>
                            <div class='row'>   
                                <div class='col-sm-6'>   
                                    <small> {{$r->created_at}}</small>
                                </div>
                                <div class='col-sm-6'>   
                                    <small>{{$r->updated_at}}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
         
        </div>
    </div>
        
<div style=" border: 1px black solid; margin:5%;margin-top:10%;margin-bottom:1%;">
<h1 align="center" style="margin-bottom:0px;margin-top:-7%;">
  RENDEZ VOUS 
</h1>
</div>

<div style="margin-left:5%;" class=gauche>
<div >
<h3 style=" display: inline;margin-top:1%">Nom:</h3>
</div>
<div style="margin-top:1%">
<h3 style=" display: inline" >Prénom:</h3>
</div>
<div style="margin-top:1%">
<h3 style=" display: inline" >Adresse:</h3>
</div>
<div style="margin-top:1%">
<h3 style=" display: inline" >Numéro télephone:</h3>
</div>
</div>
<div class="droit">
    <p style="font-size:18px">{{App\Patient::find($r->id)->name}}</p>
    <p style="font-size:18px">{{App\Patient::find($r->id)->firstName}}</p>
    <p style="font-size:18px">{{App\Patient::find($r->id)->adresse}}</p>
    <p style="font-size:18px">{{App\Patient::find($r->id)->number}}</p>
 
</div>
<table style="margin-top:20%" id="table1">
    <thead>
    <th class='bordred'>
        Objet
    </th>
    <th class='bordred'>Date</th>
    <th class='bordred'>Heure</th>
    <th class='bordred'>Information médicale</th>
</thead>
<tbody>
    <tr>
        <td class='bordred'> {{$r->object}}</td>
        <td class='bordred'> {{$r->date}}</td>
        <td class='bordred'> {{$r->time}}</td>
        <td class='bordred'>bla bla bla bla bla</td>
    </tr>
</tbody>  
</table>
</br></br></br></br>
<small> créer le :{{$r->created_at}}</small></br>
 <small> dernière modification : {{$r->updated_at}}</small>
</html>




<style>
    p{
        margin: 1%
    }
#table1 {
border: thin solid black;
border-collapse: collapse;
width: 90%;
margin-left: 5%;
}
th.boredred {

border: thin solid black;

padding: 5px;
background-color: #ffffff;
background-image: url(sky.jpg);
}
td.bordred {
font-family: sans-serif;
border: thin solid black;

padding: 5px;
text-align: center;
background-color: #ffffff;
}

body, html{height:100%;}
.piedgauche
    {
	
    float: left;
  
    text-align: left ;
    margin-left: 5%;
    width:30%
    
    }

    .pieddroit
    {
    float: right;
    
    text-align: right;
    margin-right:5%;
    width:30%
   }

   .piedcentre
    {
    float:left;
    
    text-align: center;
    width:30%
    
   }
   .gauche
    {
	
    float: left;
  
    text-align: left ;
    margin-left: 5%;
    width:30%
    
    }

    .droit
    {
    float: left;
    
    text-align: left;
    margin-right:5%;
    width:30%
   }

</style>
    
@endsection
    


