 <div class="tableWrapper table-responsive">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Email Address</th>
                    <th>Phone Number</th>
                    <th>Sub-Affiliates</th>
                  </tr>
                </thead>
                <tbody>
                
                   <?php $i = 0 ?>
            @foreach($affilites as $row)
              <tr class="{{ ($i++%2) ? 'bluish' : 'dd' }}">
                    <td>{{ $row->user->fname }} {{ $row->user->lname }}</td>
                    <td>{{ $row->user->email }}</td>
                    <td>{{ $row->user->tel }}</td>
                    <td>{{ $row->sub_affiliates }}</td>
                  </tr>
             @endforeach     
               
                </tbody>
              </table>
            </div>
            
          