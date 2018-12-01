

            
        <h2>Productos Comprados</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
            
        
      </tr>
      <td>#</td>
        <td>Nombre del producto</td>
        <td>Precio del producto</td>
        
      </tr>
    </thead>
    <tbody>
    @foreach ($products as $product)
    <tr>
      <td>{{ $product->id }}</td>
      <td>{{ $product->name }}</td>
      <td>{{ $product->pricing }}</td>
      
          </tr>
    @endforeach

              </tbody>
            </table>
          </div>
        </main>
      </div>
      <a href="{{ route('proreport.pdf') }}" class="btn btn-sm btn-primary">
            Descargar productos en PDF
        </a>
    </div>


     
