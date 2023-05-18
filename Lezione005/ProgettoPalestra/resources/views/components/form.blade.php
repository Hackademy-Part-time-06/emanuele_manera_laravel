<!-- Codice form suggerito in Selfwork 006 -->

<div class="container py-4">

    <!-- /resources/views/post/create.blade.php -->
 
    <h1>Create Post</h1>
    
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    
    <!-- form -->
    <form action="{{route('send')}}" method="POST">
        @method('POST') 
        @csrf 

        <!-- nome -->
        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input class="form-control" type="text" placeholder="Nome" name="name" id="name" value="{{old('name')}}"/>
        </div>

        <!-- telefono -->
        <div class="mb-3">
            <label class="form-label">Telefono</label>
            <input class="form-control" type="text" placeholder="Telefono" name="phone" id="phone" value="{{old('phone')}}"/>
        </div>

        <!-- email -->
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input class="form-control" type="email" placeholder="Email" name="email" id="email" value="{{old('email')}}"/>
        </div>

        <!-- messaggio -->
        <div class="mb-3">
            <label class="form-label">Messaggio</label>
            <textarea class="form-control" type="text" placeholder="Messaggio" style="height: 10rem;" name="message" id="message">{{old('message')}}</textarea> 
            <!-- textarea NON ha il value -->
        </div>

        <!-- bottoni -->
        <div class="d-grid">
            <button class="btn btn-primary btn-lg" type="submit">Invia</button>
            <button class="btn btn-danger btn-lg" type="reset">Cancella</button>
        </div>

    </form>

</div>
