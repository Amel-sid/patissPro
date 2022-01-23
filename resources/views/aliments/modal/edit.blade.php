<div class="modal fade" id="editModal-{{$aliment->id}}" tabindex="-1" role="dialog" aria-labelledby="editModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modifier un aliment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form  method="post" action="{{ url('/aliment/update') }}">
                    {{ csrf_field() }}

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input name="title" type="text" class="form-control" value="{{$aliment->name}}" id="exampleFormControlInput1" placeholder="nom de l'aliment">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input name="price" type="text" value="{{$aliment->price}}" placeholder="prix unitaire en €" class="form-control"  />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="input-group mb-4">

                                    <input  name="quantity" value="{{$aliment->qte}}" class="form-control" placeholder="Quantité" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="input-group mb-4">
                                    <input name="shop" class="form-control" value="{{$aliment->magasin }}"placeholder="Magasin" type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="id" value="{{$aliment->id}}">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-primary">Sauvegarder</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
