{{ $slot }}
<form action={{route('site.contato')}} method='post'>
    @csrf
    <input name="nome" value="{{old('nome')}}" type="text" placeholder="Nome" class="borda-branca">
    @if($errors->has('nome'))
        {{$errors->first('nome')}}
    @endif
    <br>
    <input name="telefone" value="{{old('telefone')}}"  type="text" placeholder="Telefone" class="borda-branca">
    {{$errors->has('telefone') ? $errors->first('telefone') : ''}}
    
    <br>
    
    <input name="email" value="{{old('email')}}"  type="text" placeholder="E-mail" class="borda-branca">
   
    
    <br>

    {{$errors->has('email') ? $errors->first('email') : ''}}

    <select name="motivo_contatos_id" class="borda-branca">
        
        <option value="">Qual o motivo do contato?</option>

        @foreach($motivo_contatos as $key => $motivo_contato )
            <option value="{{$motivo_contato->id}}" {{old('motivo_contatos_id') == $motivo_contato->id ? 'selected' : ''}}>{{$motivo_contato->motivo_contato}}</option>
        @endforeach

        
    </select>
    {{$errors->has('motivo_contato_id') ? $errors->first('motivo_contato_id') : ''}}
    
    <br>
    <textarea name="mensagem" class="borda-branca">
        @if(old('mensagem') != ''){{old('mensagem')}} @else Preencha aqui a sua mensagem @endif</textarea>
    <br>
    {{$errors->has('mensagem') ? $errors->first('mensagem') : ''}}
    
    <button type="submit" class="borda-branca">ENVIAR</button>
</form>
