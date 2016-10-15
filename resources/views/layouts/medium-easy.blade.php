                        <h3>Question:</h3>
                    
                        <div>           

                        <table class="gameview" align="center">
                          <tbody value='question'>

                           <tr>
                           @foreach($game->question->one as  $key => $value)
                              <td>{{ $value }}</td>
                           @endforeach
                           </tr>
                           <tr>
                           @foreach($game->question->two as  $key => $value)
                              <td>{{ $value }}</td>
                           @endforeach
                           </tr>
                           <tr>
                           @foreach($game->question->three as  $key => $value)
                              <td>{{ $value }}</td>
                           @endforeach
                           </tr>
                           <tr>
                           @foreach($game->question->four as  $key => $value)
                              <td>{{ $value }}</td>
                           @endforeach
                           </tr>
                           <tr>
                           @foreach($game->question->five as  $key => $value)
                              <td>{{ $value }}</td>
                           @endforeach
                           </tr>
                           <tr>
                           @foreach($game->question->six as  $key => $value)
                              <td>{{ $value }}</td>
                           @endforeach
                           </tr>
                           <tr>
                           @foreach($game->question->seven as  $key => $value)
                              <td>{{ $value }}</td>
                           @endforeach
                           </tr>
                           <tr>
                           @foreach($game->question->eight as  $key => $value)
                              <td>{{ $value }}</td>
                           @endforeach
                           </tr>
                           <tr>
                           @foreach($game->question->nine as  $key => $value)
                              <td>{{ $value }}</td>
                           @endforeach
                           </tr>
                           
                           </tbody>
                        </table>

                        </div>

                        <br/>
                        <h3>Answer:</h3>
                        <div>
                        <table class="gameview" align="center">
                          <tbody value='answer'>
                           <tr>
                           @foreach($game->answer->one as  $key => $value)
                              <td>{{ $value }}</td>
                           @endforeach
                           </tr>
                           <tr>
                           @foreach($game->answer->two as  $key => $value)
                              <td>{{ $value }}</td>
                           @endforeach
                           </tr>
                           <tr>
                           @foreach($game->answer->three as  $key => $value)
                              <td>{{ $value }}</td>
                           @endforeach
                           </tr>
                           <tr>
                           @foreach($game->answer->four as  $key => $value)
                              <td>{{ $value }}</td>
                           @endforeach
                           </tr>
                           <tr>
                           @foreach($game->answer->five as  $key => $value)
                              <td>{{ $value }}</td>
                           @endforeach
                           </tr>
                           <tr>
                           @foreach($game->answer->six as  $key => $value)
                              <td>{{ $value }}</td>
                           @endforeach
                           </tr>
                           <tr>
                           @foreach($game->answer->seven as  $key => $value)
                              <td>{{ $value }}</td>
                           @endforeach
                           </tr>
                           <tr>
                           @foreach($game->answer->eight as  $key => $value)
                              <td>{{ $value }}</td>
                           @endforeach
                           </tr>
                           <tr>
                           @foreach($game->answer->nine as  $key => $value)
                              <td>{{ $value }}</td>
                           @endforeach
                           </tr>

                           </tbody>
                        </table>

                        </div>