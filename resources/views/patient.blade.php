

    <!-- Bootstrap Boilerplate... -->
    @include('common.errors')
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="patient" class="col-sm-12 control-label">Nom</label>
                            <div class="col-sm-12">
                                <input type="text" name="name" id="patient-name" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="firstName" class="col-sm-12 control-label">Prenom</label>
                            <div class="col-sm-12">
                                <input type="text" name="firstName" id="patient-firstName" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="adresse" class="col-sm-12 control-label">Adresse</label>
                            <div class="col-sm-12">
                                <input type="text" name="adresse" id="patient-adresse" class="form-control">
                            </div>
                    
                        </div>
                    </div>

                </div>
                <div class='row'>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="mail" class="col-sm-12 control-label">Mail</label>
                            <div class="col-sm-12">
                                <input type="text" name="mail" id="patient-mail" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="number" class="col-sm-12 control-label">Numéro</label>

                            <div class="col-sm-12">
                                <input type="text" name="number" id="patient-number" class="form-control">
                            </div>
                        
                        </div>
                    </div>
                </div>
    

    <!-- TODO: Current Tasks -->

   <!-- @if (count($patients) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Current patients
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    
                    <thead>
                        <th>patients</th>
                        <th>&nbsp;</th>
                    </thead>

                    <tbody>
                        @foreach ($patients as $patient)
                            <tr>
                                <td class="table-text">
                                    <div>{{ $patient->name }}</div>
                                </td>

                                <td>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif -->
