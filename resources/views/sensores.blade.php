 <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

          <h2>Section title</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
              <td>#</td>
            <td>sensor</td>
            <td>hora</td>
        
      </tr>
      <td>ID</td>
        <td>Nombre del producto</td>
        <td>Precio del producto</td>
        
      </tr>
    </thead>
    <tbody>
    @foreach ($dates as $date)
    <tr>
      <td>{{ $date->id }}</td>
      <td>{{ $date->datos }}</td>
      <td>{{ $date->dato1 }}</td>
      <td>{{ $date->created_at }}</td>

      
          </tr>
    @endforeach

              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>