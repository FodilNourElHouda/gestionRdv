
<form action="/rdvs" method="POST" class="form-horizontal">
                {{ csrf_field() }}
                @include('common.errors')

                <!-- Task Name -->
                <div class="form-group">
                    <label for="objet" class="col-sm-3 control-label">Objet</label>

                    <div class="col-sm-12">
                        <input type="text" name="object" id="objet" class="form-control">
                    </div>
                    
                </div>
                <div class="form-group">
                    <label for="date" class="col-sm-3 control-label">Date</label>

                    <div class="col-sm-12">
                        <input type="date" name="date" id="date" class="form-control">
                    </div>
                    
                </div>
                
                <div class="form-group">
                    <label for="hour" class="col-sm-3 control-label">Heure</label>

                    <div class="col-sm-12">
                        <input type="time" name="time" id="hour" class="form-control">
                    </div>
                    
                </div>
                
                <div class="form-group">
                    <label for="patient" class="col-sm-3 control-label">patient</label>

                    <div class="col-sm-12">
                        
                            <div class="col-sm-8">Nouveau patient <input type="checkbox" name="check" id="myCheck" onclick="myFunction()">
                            <select name="id_patient" id="select" >
                            @if (count($patients) > 0)
                                @foreach ($patients as $patient)
                                    <option value= " <?php echo  $patient->id ?>">{{ $patient->name }}</option>
                                @endforeach
                            @endif
                            </select>
                            </div>
                            <div id="new" style="display:none">
                            @include('patient')
                            </div>
                        
                        
                    </div>
                    
                </div>
                
                <!-- Add Task Button -->
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-6">
                        <button type="submit" class="btn btn-default text-canter">
                            <i class="fa fa-plus"></i> Ajouter RDV
                        </button>
                    </div>
                </div>
            </form>
            
            
            
            
<script>
function myFunction() {
  // Get the checkbox
  var checkBox = document.getElementById("myCheck");
  // Get the output text
  var newelem = document.getElementById("new");
  var text = document.getElementById("select");
  

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    text.style.display = "none";
    newelem.style.display = "block";

  } else {
    text.style.display = "block";
    newelem.style.display = "none";

  }
} 
</script>

