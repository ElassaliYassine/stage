@extends('/layouts.app')
@section('content')

    <style>
        /* .wid_card {
            width: 19rem;
            margin: 1rem 0rem ;

        } */
        .bg-i{
            /* background: rgb(247, 237, 237); */
        }
        .image {
            width: 100px;
            height: 150px;
        }



        /* hero */
        #hero {
          margin-top: -25px !important;
        }
        


    .image_path {
        max-width : 100%;
        height: 130px;
    }

    .wid{
      /* background:rebeccapurple; */
      width: 530px;
    }

      
        
    </style>





  <!-- ======= card Section ======= -->
    {{-- <div class="bg-i container " >  
      <div class="row">
          @foreach ($posts as $post)    
        <div class="wid_card">
          <div class="card">
            <div class="card-body">
            <a href="/post/{{$post->id}}">
              <img src="/assets/images/advertisement/{{$post->image_path}}" class="image" alt="">
            </a>  
              <h3 class="card-title">{{$post->title}} </h3>
              <p class="card-text">{{$post->description}}</p>
            </div>
          </div>
        </div>  
      @endforeach --}}
<section  class="container   " >
  
<div hidden >
 {{$M_Ch = "" }}
 {{$L_O = "" }}
 {{$Ta_T = "" }}
 {{$F_M = "" }}
 {{$R_S = "" }}
 {{$B_M = "" }}
 {{$C_S = "" }}
 {{$D_T = "" }}
 {{$S_M = "" }}
 {{$G_O = "" }}
 {{$L_S_E = "" }}
 {{$D_O_E = "" }}
  @if ( $region == 'Marrakech-Safi' )
      {{$M_Ch =  '' }}
      @elseif ($region == 'Tanger-Tetouan-Al-Hoceima' )
      {{$Ta_T =  '' }}
      @elseif ($region == 'L-Oriental' )
      {{$L_O =  '' }}
      @elseif ($region == 'Fes-Meknes' )
      {{$F_M =  '' }}
      @elseif ($region == 'Rabat-Sale-Kenitra' )
      {{$R_S =  '' }}
      @elseif ($region == 'Beni-Mellal-Khenifra' )
      {{$B_M =  '' }}
      @elseif ($region == 'Casablanca-Settat' )
      {{$C_S =  '' }}
      @elseif ($region == 'Draa-Tafilalet' )
      {{$D_T =  '' }}
      @elseif ($region == 'Souss-Massa' )
      {{$S_M =  '' }}
      @elseif ($region == 'Guelmim-Oued-Noun' )
      {{$G_O =  '' }}
      @elseif ($region == 'Laayoune-Sakia-El-Hamra' )
      {{$L_S_E =  '' }}
      @elseif ($region == 'Dakhla-Oued-Ed-Dahab' )
      {{$D_O_E =  '' }}
  @endif

</div>

  <!-- ======= Category Section ======= -->
    <section  class="container wid " >
      <div class="row   " >
        {{-- <a  class="  col       text-dark  text-center"  href="/advertisement/posts/eonstruction professionals"  > 
          <img class="rounded-circle" width="70px" src="/assets/images/category/construction_professionals.png" alt="">
          Construction professionals 
        </a> --}}
        <a  class="  col  m-1     text-dark  text-center"  href="/advertisement/posts/craftsmen"                   > 
          <img width="70px" src="/assets/images/category/craftsmen.png" alt="">
          <p>craftsmen</p> 
        </a>
        <a  class="  col  m-1     text-dark text-center "  href="/advertisement/posts/electronic maintenance"      >
          <img width="70px" src="/assets/images/category/electronic_maintenance.png" alt="">
          <p>Electronic maintenance</p>
        </a>
        <a  class="  col m-1      text-dark text-center "  href="/advertisement/posts/home repairs"  >
          <img width="70px" src="/assets/images/category/home_repairs.png" alt="">
          <p>Home repairs</p>
        </a>
        <a  class="  col  m-1     text-dark text-center "  href="/advertisement/posts/building " >
          <img width="70px" src="/assets/images/category/building.png" alt="">
          <p>Building</p> 
        </a>
        {{-- <a  class="  col       text-dark text-center "  href="/advertisement/posts/professionals craftsmen "> 
          <img width="70px" src="/assets/images/category/other_services.png" alt=""> 
          Professionals Craftsmen 
        </a> --}}
        <a  class="  col m-1      text-dark text-center "  href="/advertisement/posts/food services" > 
          <img width="70px" src="/assets/images/category/food_services.png" alt="">
          <p>Food services   </p>
        </a>
        <a  class="  col   m-1    text-dark   text-center"  href="/advertisement/posts/transport and transportation"                > 
          <img width="70px" src="/assets/images/category/transport_and_transportation.png" alt="">
          <p>Transport and transportation </p> 
        </a>
        <a  class="   col  m-1   text-dark text-center "  href="/advertisement/posts/local products "  >   
          <img width="70px" src="/assets/images/category/local_products.png" alt="">
          <p>Local products</p>
        </a>
        <a  class="   col  m-1   text-dark  text-center "  href="/advertisement/posts/other services">
          <img width="70px" src="/assets/images/category/other_services.png" alt="">
          <p>Other services    </p>
        </a>
      
      </div>
    </section>
<!-- =======  End Category Section ======= -->


<form action="/advertisement/filter"   class="m-5"  method="get" >
  
  <input hidden type="text" value="{{$categorie}}" name="categorie" >

  
      
  <label for=""> chese region </label>
  <span class="form-floating mb-3 mb-md-0">
      <select name="region" id="region" value="ghgh"  onclick="showCity(this.value)"     >
          <option   value={{null}} >all </option>
          <option value="Tanger-Tetouan-Al-Hoceima" {{( !empty($region =="Tanger-Tetouan-Al-Hoceima"  ))? 'selected' : "" }}  > Tanger-Tétouan-Al Hoceïma</option>
          <option value="L-Oriental" {{( !empty($region =="L-Oriental"  ))? 'selected' : "" }}  >  L'Oriental</option>
          <option value="Fes-Meknes"  {{( !empty($region =="Fes-Meknes"  ))? 'selected' : "" }} >  Fès-Meknès </option>
          <option value="Rabat-Sale-Kenitra"  {{( !empty($region =="Rabat-Sale-Kenitra"  ))? 'selected' : "" }}  >   Rabat-Salé-Kénitra </option>
          <option value="Beni-Mellal-Khenifra"  {{( !empty($region =="Beni-Mellal-Khenifra"  ))? 'selected' : "" }}  >    Béni Mellal-Khénifra </option>
          <option value="Casablanca-Settat" {{( !empty($region =="Casablanca-Settat"  ))? 'selected' : "" }}   >   Casablanca-Settat   </option>
          <option value="Marrakech-Safi" {{( !empty($region =="Marrakech-Safi"  ))? 'selected' : "" }} > Marrakech-Safi    </option>
          <option value="Draa-Tafilalet"  {{( !empty($region =="Draa-Tafilalet"  ))? 'selected' : "" }}  >    Drâa-Tafilalet  </option>
          <option value="Souss-Massa"   {{( !empty($region =="Souss-Massa"  ))? 'selected' : "" }}  >  Souss-Massa   </option>
          <option value="Guelmim-Oued-Noun"  {{( !empty($region =="Guelmim-Oued-Noun"  ))? 'selected' : "" }}  >  Guelmim-Oued Noun   </option>
          <option value="Laayoune-Sakia-El-Hamra"  {{( !empty($region =="Laayoune-Sakia-El-Hamra"  ))? 'selected' : "" }}  >  Laâyoune-Sakia El Hamra    </option>
          <option value="Dakhla-Oued-Ed-Dahab"   {{( !empty($region =="Dakhla-Oued-Ed-Dahab"  ))? 'selected' : "" }}  >   Dakhla-Oued Ed-Dahab  </option>
          
      </select> 
  </span>
      
    


  {{-- start City --}}
  
      <span class="">
          <label for="" id='safii' > chosse city </label>
          <span class="form-floating mb-3 mb-md-0">
              <select name="city" id="city"  >
                  <option hidden value="">  All  </option>
                  {{-- Tanger-Tetouan-Al-Hoceima --}}
                  <option class=" G_Tanger {{$Ta_T}} " id="Al_Hoceima" value="Al Hoceima"> Al Hoceima </option>
                  <option class=" G_Tanger {{$Ta_T}} " id="Chefchaouen" value="Chefchaouen"> Chefchaouen </option>
                  <option class=" G_Tanger {{$Ta_T}} " id="Fahs_Anjra" value="Fahs Anjra"> Fahs Anjra </option>
                  <option class=" G_Tanger {{$Ta_T}} " id="Larache" value="Larache"> Larache </option>
                  <option class=" G_Tanger {{$Ta_T}} " id="M_diq_Fnideq" value="M'diq-Fnideq"> M'diq-Fnideq </option>
                  <option class=" G_Tanger {{$Ta_T}} " id="Ouezzane" value="Ouezzane"> Ouezzane </option>
                  <option class=" G_Tanger {{$Ta_T}} " id="Tangier-Assilah" value="Tangier-Assilah "> Tangier-Assilah </option>
                  <option class=" G_Tanger {{$Ta_T}} " id="Tetouan" value="Tetouan "> Tetouan </option>
                  {{-- L-Oriental --}}
                  <option class=" G_Oriental {{$L_O}} " id="Berkane" value="Berkane"> Berkane</option>
                  <option class=" G_Oriental  {{$L_O}} " id="Driouch" value="Driouch"> Driouch</option>
                  <option class=" G_Oriental  {{$L_O}} " id="Figuig" value="Figuig"> Figuig</option>
                  <option class=" G_Oriental  {{$L_O}} " id="Guercif" value="Guercif"> Guercif</option>
                  <option class=" G_Oriental  {{$L_O}} " id="Jerada" value="Jerada"> Jerada</option>
                  <option class=" G_Oriental  {{$L_O}} " id="Nador" value="Nador"> Nador</option>
                  <option class=" G_Oriental  {{$L_O}} " id="Oujda_Angad" value="Oujda-Angad"> Oujda-Angad</option>
                  <option class=" G_Oriental  {{$L_O}} " id="Taourirt" value="Taourirt"> Taourirt</option>
                  {{-- Fes-Meknes --}}
                  <option class="  G_Fes {{$F_M}} " id="Boulemane" value="Boulemane"> Boulemane </option>
                  <option class="  G_Fes {{$F_M}} " id="Fes" value="Fes"> Fes </option>
                  <option class="  G_Fes {{$F_M}} " id="Ifrane" value="Ifrane"> Ifrane </option>
                  <option class="  G_Fes {{$F_M}} " id="Meknes" value="Meknes"> Meknès </option>
                  <option class="  G_Fes {{$F_M}} " id="Moulay_Yaacoub" value="Moulay Yaâcoub	"> Moulay Yaâcoub	 </option>
                  <option class="  G_Fes {{$F_M}} " id="Sefrou" value="Séfrou"> Séfrou </option>
                  <option class="  G_Fes {{$F_M}} " id="Taounate" value="Taounate"> Taounate </option>
                  <option class="  G_Fes {{$F_M}} " id="Taza" value="Taza"> Taza </option>
                  {{-- Rabat-Sale-Kenitra --}}
                  <option class=" G_Rabat {{$R_S}} " id="Rabat" value="Rabat"> Rabat </option>
                  <option class=" G_Rabat {{$R_S}} " id="Sale" value="Salé"> Salé </option>
                  <option class=" G_Rabat {{$R_S}} " id="Skhirate-Temara" value="Skhirate-Témara"> Skhirate-Témara </option>
                  <option class=" G_Rabat {{$R_S}} " id="Kenitra" value="Kénitra"> Kénitra </option>
                  <option class=" G_Rabat {{$R_S}} " id="Sidi-Kacem" value="Sidi Kacem"> Sidi Kacem </option>
                  <option class=" G_Rabat {{$R_S}} " id="Sidi-Slimane" value="Sidi Slimane"> Sidi Slimane </option>
                  <option class=" G_Rabat {{$R_S}} " id="Khemisset" value="Khemisset"> Khemisset </option>
                  {{-- Beni-Mellal-Khenifra --}}
                  <option class="  G_Beni  {{$B_M}} " id="Azilal" value="Azilal"> Azilal </option>
                  <option class="  G_Beni  {{$B_M}} " id="Beni-Mellal" value="Béni Mellal"> Béni Mellal </option>
                  <option class="  G_Beni  {{$B_M}} " id="Fquih-Ben-Salah" value="Fquih Ben Salah"> Fquih Ben Salah </option>
                  <option class="  G_Beni  {{$B_M}} " id="Khenifra" value="Khénifra"> Khénifra </option>
                  <option class="  G_Beni  {{$B_M}} " id="Khouribga" value="Khouribga"> Khouribga </option>
                  {{-- Casablanca-Settat --}}
                  <option class="  G_Casablanca {{$C_S}} " id="Benslimane" value="Benslimane"> Benslimane </option>
                  <option class="  G_Casablanca {{$C_S}} " id="Berrechid" value="Berrechid"> Berrechid </option>
                  <option class="  G_Casablanca {{$C_S}} " id="Casablanca" value="Casablanca"> Casablanca </option>
                  <option class="  G_Casablanca {{$C_S}} " id="El-Jadida" value="El Jadida">  El Jadida </option>
                  <option class="  G_Casablanca {{$C_S}} " id="Mediouna" value="Médiouna"> Médiouna </option>
                  <option class="  G_Casablanca {{$C_S}} " id="Mohammadia" value="Mohammadia"> Mohammadia </option>
                  <option class="  G_Casablanca {{$C_S}} " id="Nouaceur" value="Nouaceur"> Nouaceur </option>
                  <option class="  G_Casablanca {{$C_S}} " id="Settat" value="Settat"> Settat </option>
                  <option class="  G_Casablanca {{$C_S}} " id="Sidi-Bennour" value="Sidi-Bennour"> Sidi Bennour </option>
                  {{-- Marrakech-Safi --}}
                  <option class="  G_Marrakech {{$M_Ch}} " id="Marrakech" value="Marrakech"> Marrakech </option>
                  <option class="  G_Marrakech {{$M_Ch}} " id="Al Haouz" value="Al Haouz"> Al Haouz </option>
                  <option class="  G_Marrakech {{$M_Ch}} " id="El Kelâa des Sraghna" value="El Kelâa des Sraghna"> El Kelâa des Sraghna </option>
                  <option class="  G_Marrakech {{$M_Ch}} " id="Essaouira" value="Essaouira"> Essaouira </option>
                  <option class="  G_Marrakech {{$M_Ch}} " id="Chemaia" value="Chemaia"> Chemaia </option>
                  <option class="  G_Marrakech {{$M_Ch}} " id="Rehamna" value="Rehamna"> Rehamna </option>
                  <option class="  G_Marrakech {{$M_Ch}} " id="Safi" value="Safi"  {{( !empty($city =="Safi"  ))? 'selected' : "" }}  > Safi </option>
                  <option class="  G_Marrakech {{$M_Ch}} " id="Youssoufia" value="Youssoufia"> Youssoufia </option>
                  {{-- Draa-Tafilalet --}}
                  <option class=" G_Draa {{$D_T}} " id="Errachidia" value="Errachidia"> Errachidia </option>
                  <option class=" G_Draa {{$D_T}} " id="Ouarzazate" value="Ouarzazate"> Ouarzazate </option>
                  <option class=" G_Draa {{$D_T}} " id="Midelt" value="Midelt"> Midelt </option>
                  <option class=" G_Draa {{$D_T}} " id="Tinghir" value="Tinghir"> Tinghir </option>
                  <option class=" G_Draa {{$D_T}} " id="Zagora" value="Zagora"> Zagora </option>
                  {{-- Souss-Massa --}}
                  <option class="  G_Souss  {{$S_M}} " id="Agadir-Ida-Ou-Tanane" value="Agadir-Ida Ou Tanane"> Agadir-Ida Ou Tanane </option>
                  <option class="  G_Souss  {{$S_M}} " id="Chtouka-Ait-Baha" value="Chtouka-Aït Baha "> Chtouka-Aït Baha  </option>
                  <option class="  G_Souss  {{$S_M}} " id="Inezgane-Ait-Melloul" value="Inezgane-Aït Melloul"> Inezgane-Aït Melloul </option>
                  <option class="  G_Souss  {{$S_M}} " id="Taroudannt" value="Taroudannt"> Taroudannt </option>
                  <option class="  G_Souss  {{$S_M}} " id="Tata" value="Tata"> Tata </option>
                  <option class="  G_Souss  {{$S_M}} " id="Tiznit" value="Tiznit"> Tiznit </option>
                  {{-- Guelmim-Oued-Noun --}}
                  <option class=" G_Guelmim {{$G_O}} " id="Assa-Zag " value="Assa-Zag "> Assa-Zag  </option>
                  <option class=" G_Guelmim {{$G_O}} " id="Guelmim" value="Guelmim"> Guelmim </option>
                  <option class=" G_Guelmim {{$G_O}} " id="Sidi-Ifni" value="Sidi Ifni"> Sidi Ifni </option>
                  <option class=" G_Guelmim {{$G_O}} " id="Tan-Tan" value="Tan-Tan"> Tan-Tan </option>
                  {{-- Laayoune-Sakia-El-Hamra --}}
                  <option class="  G_Laayoune  {{$L_S_E}} " id="Boujdour" value="Boujdour"> Boujdour </option>
                  <option class="  G_Laayoune  {{$L_S_E}} " id="Es-Semara" value="Es Semara"> Es Semara </option>
                  <option class="  G_Laayoune  {{$L_S_E}} " id="Laayoune" value="Laâyoune"> Laâyoune </option>
                  <option class="  G_Laayoune  {{$L_S_E}} " id="Tarfaya" value="Tarfaya"> Tarfaya </option>
                  {{-- Dakhla-Oued-Ed-Dahab --}}
                  <option class=" G_Dakhla  {{$D_O_E}} " id="Aousserd" value="Aousserd"> Aousserd </option>
                  <option class=" G_Dakhla  {{$D_O_E}} " id="Oued-Ed-Dahab" value="Oued Ed-Dahab"> Oued Ed-Dahab </option>
 




              </select> 
            </span>
      </span>
  
  {{-- end City --}}
 
  <input type="submit"> 
  
  

</form>    















<div class="row  ">
  {{-- <div class="mt-5" > --}}
    @foreach ($posts as $post)
        <div class="co/l-12 col-3 bg- info ">
          <a href="/post/{{$post->id}}">
            <img src="/assets/images/advertisement/{{ $post->Images_post[0]->image_path }}" class="image_path" alt="">
          </a>
        </div>
        <div class="col/-12 col-8  bg-/danger ">
            <h5> {{ $post->title}}   </h5>
              <div> <span class="text-light bg-info  "  > {{ $post->price}} MD  </span>  </div>
              <div> {{$post->city}}  , {{$post->region}} </div>
            <p>
                {{$post->description}} 
            </p>
        </div>
        <div class="co/l-12 col-1   ">
          @if ( Auth::user() &&   Auth::user()->id == $post->user->id )
            
         <div class="mb-1" >
          <!-- Button trigger modal -->
          
          <i  class=" " data-toggle="modal" data-target="#del_post-user_127">
            <p class="ti-trash ti" ></p>
          </i>
          <a href="/advertisement/edit/{{  $post->id  }}" class="   " ><span class="ti-pencil-alt ti  " ></span>  </a>
      
          {{-- start like --}}
          <p class="card-title  w-25 d-flex ">{{ count($post->likes) }} 
          <span  hidden  >   {{   $f1 = 0  }} </span>
          <span  hidden  >   {{   $f2 = 0  }} </span>
          @if (auth()->user())
            @foreach ( $post->likes as $like)
                  @if ( ($like->user_id  ) === (  auth()->user()->id )  )
                    <span  hidden  >   {{   $f1 = 1  }} </span>     
                  @else
                    <span  hidden >  {{    $f2 = 1 }} </span> 
                  @endif   
            @endforeach
          @endif
          
          @if ($f1 == 1)
          <a href="{{route('like/destroy'  , $like->id )}}">
                      <i class="bi bi-heart-fill  text-danger  "></i>
                    </a> 
          @else
              <a href="{{route('like/create' , $post->id )}}">
                    <i class="bi bi-heart  text-danger  "></i>
                  </a>
          @endif
                </p>
                {{-- end like --}}
              </div>
          @endif 
      </div>
      <hr>
    @endforeach
  {{-- </div> --}}
</div>




</section>
  <!-- ======= End card Section ======= -->
      

<!-- Modal -->
<div class="modal fade" id="del_post-user_127" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
      <div class="modal-body">
        <div class="container-fluid">
          Are you sure to delete 
        </div>
      </div>
      @if (  !empty($post)     )
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        {{-- <button type="button" class="btn btn-primary">Save</button> --}}
        <a  class="btn btn-danger"  href="/advertisement/delete/{{  $post->id  }}" class="btn btn-success" >delete</a>
      </div>
      @endif

    </div>
  </div>
</div>
<!-- end  Modal -->  
    
@endsection