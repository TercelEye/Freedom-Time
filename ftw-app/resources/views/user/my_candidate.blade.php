<div class="tableWrapper table-responsive">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Name</th>
                <th>Email Address</th>
                <th>Phone Number</th>
                <th>Video</th>
                <th>Contact</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
           <?php $i = 0 ?>
            @foreach($invitations as $row)
              <tr class="{{ ($i++%2) ? 'bluish' : 'dd' }}">
                <td>{{ $row->name }}</td>
                <td>{{ $row->email }}</td>
                <td>{{ $row->tel }}</td>
                <td>Yes</td>
                <td class="{{ $row->feedback }}">{{ $row->feedback }}</td>
                <td class="action"><!-- View Record --> 
                  <a href="#" data-toggle="modal" data-target=".view_d_{{ $row->id }}" class="btn btn-info">View Record</a> 
                  <!-- Modal -->
                  
                  <div class="modal fade view_d_{{ $row->id }}" id="modalviewrecord1" role="dialog">
                    <div class="modal-dialog"> 
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" id="triangle-topright" data-dismiss="modal"><span>&times;</span></button>
                          <h2 class="modal-title text-center">User Record</h2>
                        </div>
                        <!-- modal-header -->
                        <div class="modal-body">
                          <div class="row">
                            <div class="bodyContents">
                              <h4 class="personal">Personal Details:</h4>
                              <p class="personalname"><span>Name: </span>{{ $row->name }}</p>
                              <p class="personalemail"><span>Email: </span>{{ $row->email }}</p>
                              <p class="personalphone"><span>Phone: </span>{{ $row->tel }}</p>
                              <h4 class="invitation same">Invitation Funnel Details</h4>
                              <p class="invitationdate"><span>Date Registered in Invitation Funnel: </span> {{ $row->created_at->format('d, M,Y') }}</p>
                              
                             @if($row->feedback != "")
                              <p class="invitationinterest"><span>Interest Status: </span> <span style="background-color:<?=$row->feedback?>" class="status"></span></p>
                             @endif
                             
                              <?php 
				  $user = \App\User::where('invited_by',$row->user_id)->where('email',$row->email)->first();
				  ?>
                             
                              <?php if($user != ""){?>
                              <h4 class="affiliate same">Affiliate Details:</h4>
                              <p class="affiliatedate"><span>Date Registered As An Affiliate Partner:</span>
                               {{  $user->created_at  }}</p>
                              <p class="affiliateusername"><span>Username: </span>{{  $user->username  }}</p>
                              <p class="affiliateshare"><span>Affiliate Share Link: </span><span class="jhamelaagain">http://www.freedomandwealth.com/register/{{  $user->username  }}</span></p>
                               <?php } ?>
                              
                              <h4 class="notes same">Notes:</h4>
                              <p class="jhamela">{{ $row->note }}</p>
                            </div>
                            <!-- bodyContents --> 
                          </div>
                        </div>
                        <!-- modal-body -->
                        <div class="modal-footer"></div>
                        <!-- modal-footer --> 
                      </div>
                      <!-- modal-content --> 
                      
                    </div>
                    <!-- modal-dialog --> 
                  </div>
                  <!-- modal fade --> 
                  
                 
                  <?php if($user == ""){?>
                 <?php /*?> <a href="#" class="btn btn-xs btn-success">Send Affiliate Link</a> <?php */?>
                  <?php } ?>
                  
                  </td>
              </tr>
            @endforeach
              
            </tbody>
          </table>
        </div>      