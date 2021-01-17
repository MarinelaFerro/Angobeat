 <div class="form-row">
     <div class="form-group col-md-6">
         <label for="inputEmail4">Titulo</label>
         <input type="text" class="form-control" id="inputEmail4" placeholder="titulo" name="vc_titulo" required>
     </div>
     <div class="form-group col-md-6">
         <label for="inputPassword4">Data de publicação</label>
         <input type="date" class="form-control" id="inputPassword4" name="dt_" required>
     </div>
 </div>
 <div class="form-group">
     <label for="inputAddress">Descrição</label>
     <input type="text" class="form-control" id="inputAddress" placeholder="descrição" name="vc_descricao" required>
 </div>
 <div class="form-group">
     <label for="inputAddress2">Duração</label>
     <input type="time" class="form-control" id="inputAddress2" name="tm_duracao" required>
 </div>

 <div class="form-row">
     <div class="form-group col-md-4">
         <label for="inputState">Artista</label>
         <select id="inputState" class="form-control" name="it_idArtista" required>
             <option disabled selected>Selecione o(a) Artista</option>
             @if ($artistas)
                 @foreach ($artistas as $item)
                     <option value="{{ $item->id }}">{{ $item->vc_nome }}</option>
                 @endforeach
             @endif
         </select>
     </div>

     <div class="form-group col-md-4">
         <label for="inputState">Categoria</label>
         <select id="inputState" class="form-control" name="it_idCategoria" required>
             <option disabled selected>Selecione a categoria</option>
             @if ($categorias)
                 @foreach ($categorias as $item)
                     <option value="{{ $item->id }}">{{ $item->vc_nome }}</option>
                 @endforeach
             @endif
         </select>
     </div>

     <div class="form-group col-md-4">
         <label for="inputState">Álbum</label>
         <select id="inputState" class="form-control" name="it_idAlbum" required>
             <option disabled selected>Selecione o Álbum</option>
             <option value="">Sem álbum</option>
             @if ($albuns)
                 @foreach ($albuns as $item)
                     <option value="{{ $item->id }}">{{ $item->vc_nome }}</option>
                 @endforeach
             @endif
         </select>
     </div>
     <div class="form-group col-md-6">
         <div class="custom-file">
             <input type="file" class="custom-file-input" id="validatedCustomFile" name="vc_imagem" required>
             <label class="custom-file-label" for="validatedCustomFile"></label>
             <div class="invalid-feedback">Example invalid custom file feedback</div>
         </div>
     </div>
     <div class="form-group col-md-6">
         <label for="exampleFormControlFile1">capa da musica</label>
         <input type="file" class="form-control-file" id="exampleFormControlFile1" name="vc_imagem" required>
     </div>
     <div class="form-group col-md-6">
         <label for="exampleFormControlFile1">Carregar música</label>
         <input type="file" class="form-control-file" id="exampleFormControlFile1" name="vc_musica" required>
     </div>
 </div>
