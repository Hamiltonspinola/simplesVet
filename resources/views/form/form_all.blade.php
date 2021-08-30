<div class="row ml-3 mr-3">
        <div class="col-md-6">
            <div for="name" class="form-group">
                <label for="name">Nome Completo: </label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name')}} ">
            </div>
        </div>

        <div class="col-md-6">
            <div for="email" class="form-group">
                Email :<input type="email" name="email" id="email" class="form-control" value="{{ old('email')}}">
            </div>
        </div>

        <div class="col-6">
            <div for="tel_1" class="form-group">
                Telefone 1: <input type="tel" name="tel_1" id="tel_1" class="form-control" value="{{ old('tel_1')}}">
            </div>
        </div>

        <div class="col-6">
            <div for="tel_2" class="form-group">
                Telefone 2: <input type="tel" name="tel_2" id="tel_2" class="form-control" value="{{ old('tel_2')}}">
            </div>
        </div>
        <div class="col-12 mb-2 mt-2">
            <hr>
            <h1>Dados do animal</h1>
            <hr>
        </div>
        <div class="col-6">
            <div  class="form-group">
                Nome: <input type="text" name="nome_pet" id="name_pet" class="form-control" value="{{ old('name_pet')}}">
            </div>
        </div>

        {{-- <div class="col-6">
            <div  class="form-group">
                Raça: 
                <select name="raca" id="" class="form-control">
                    @foreach ($racas as $raca)
                        <option value="{{ $raca->id }}">{{ $raca->nome }}</option>
                    @endforeach
                </select>
            </div>
        </div> --}}

        {{-- <div class="col-6">
            <div class="form-group">
                Espécie:
                <select name="especie" id="" class="form-control">
                    @foreach ($especies as $especie)
                        <option value="{{ $especie->id }}">{{ $especie->nome }}</option>
                    @endforeach
                </select>
            </div>
        </div> --}}

        <div class="col-6">
            <div class="form-group">
                Nascimento: <input type="date" name="nascimento" id="nascimento" class="form-control" value="{{ old('nascimento')}}">
            </div>
        </div>

        <div class="col-12">
            <div class="form-group">
                Histórico Clínico <br>
                <textarea name="historico_clinico" id="historico_clinico" style="width:100%;" rows="3"></textarea>
            </div>
        </div>
        <center>
        <input type="submit" value="Enviar" class="btn btn-secondary mt-3 col-8">
        </center>
</div>