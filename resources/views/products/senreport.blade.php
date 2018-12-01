<h2>Reporte de slots</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">     
              <thead>       
                <tr>
          <td>#</td>   
          <td>slot 1</td>   
          <td>slot 2</td>   
          <td>hora</td>
        
      </tr>
     
        
      </tr>
    </thead>
    <tbody>
    @foreach ($dates as $date)
    <tr>
      <td>{{ $date->id }}</td>
      <td>{{ $date->datos }}</td>
      <td>{{ $date->dato1 }}</td>

      
          </tr>
    @endforeach

              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>

    <a href="{{ route('senreport.pdf') }}" class="btn btn-sm btn-primary">
            Descargar reportes en PDF
        </a>

      </section>
    </div>