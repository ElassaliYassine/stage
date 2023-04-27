@extends('/layouts.app')
@section('content')
<style>
    .image12 {
         cursor: pointer ;
    }
    .image12:hover {
        background: rgb(169, 169, 169);
    }
</style>
<div class="row justify-content-center">
    <div class="col-lg-5 col-md-4 mb-5 ">
        <div class="card shadow  border-0 rounded-lg mt-5">
            <div class="card-header"><h3 class="text-center font-weight-light my-4">Create post</h3></div>
            <div class="card-body">
                <form  method="post" action="/advertisement/update"  enctype="multipart/form-data" >
                    @csrf

                    <input hidden type="number" name="user_id" value="{{Auth::user()->id}}"   name="user_id" />
                    <input hidden type="number" name="id" value={{$post->id}}   name="id" />
                     

                    <div class="row mb-3">
                        <div class="">
                            <label for=""> chese category </label>
                            <div class="form-floating mb-3 mb-md-0">
                                <select name="categorie"  id="catego rie_update"   value="{{ $post->categorie }}"  >
                                    <option  hidden value="" > chese category</option>
                                    <option {{ (  $post->categorie =='building' )?"selected": "" }} value="building"> Building</option>
                                    <option {{ (  $post->categorie =='craftsmen' )?"selected": "" }} value="craftsmen"> craftsmen</option>
                                    <option {{ (  $post->categorie =='electronic maintenance' )?"selected": "" }} value="electronic maintenance"> electronic maintenance</option>
                                    <option {{ (  $post->categorie =='home repairs' )?"selected": "" }} value="home repairs"> home repairs</option>
                                    <option {{ (  $post->categorie =='food services' )?"selected": "" }} value="food services"> food services</option>
                                    <option {{ (  $post->categorie =='transport and transportation' )?"selected": "" }} value="transport and transportation"> transport and transportation</option>
                                    <option {{ (  $post->categorie =='local products' )?"selected": "" }} value="local products"> local products</option>
                                    <option {{ (  $post->categorie =='other services' )?"selected": "" }} value="other services"> other services</option>
                                </select>
                                
                            </div>
                            @error('categorie')
                                     
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>

                        <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input class="form-control" id="title"  name="title"  type="text" placeholder="Enter your title" value="{{ $post->title }}"  >
                                <label for="title">title</label>
                            </div>
                            @error('title')
                                     <span class="text-danger" >
                                        <strong >{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>

                    <div class="form-floating mb-3">
                        <label for="description  " >description</label>
                        <textarea name="description"  id="description" cols="30" rows="10" class="form-control h-50 py-5 "  > {{ $post->description }}  </textarea>
                    @error('description')
                                     
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" id="price" name="price"  value="{{$post->price}}" type="text"  >
                                <label for="inputPassword">Price</label>
                            </div>
                            @error('price')
                                     
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        </div>

                        <div class="row mb-3">
                        <label for="image_path">Confirm image_path</label>
                            <div class="col-md-12">
                                <div class="form -floating mb-3 mb-md-0">
                                    {{-- <input class="form -control" id="image_path"   value="  assets/images/advertisement/{{$post->image_path}}"     type="file" name="image_path" placeholder="Confirm image_path"> --}}
                                    <input  class="form -control" id="image_path"   value="{{$post->image_path}}"   type="file" name="image_path[]"  multiple  placeholder="Confirm image_path">
                                    @error('image_path')
                                     
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    <div class="d-flix" >
                                @foreach($post->images_post as $p)
                                        
                                
                                <img  class="image12" data-toggle="modal" src="/assets/images/advertisement/{{$p->image_path}}" width="100PX"   data-target="#mm{{$p->id}}" height="122px" alt="">

                                <!-- Modal -->
                                <div class="modal fade" id="mm{{$p->id}}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Modal title</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                            </div>
                                            <div class="modal-body">
                                                {{$p->id}}
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                {{-- <button type="button" class="btn btn-primary">Save</button> --}}
                                                <a href="/delete_image/{{$p->id}}">delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                
                                
                                
                                @endforeach
                                </div>

                    </div>
                            </div>
                    </div>
                    

                    
                    
                    <div class="row mb-3">
                        <div class="">
                            <label for=""> chese region </label>
                            <div class="form-floating mb-3 mb-md-0">
                                <select name="region" id="region"  onchange="f1(this.value)" value="{{ $post->region }}"   >
                                    <option   hidden > </option>
                                    <option {{ (  $post->region =='Tanger-Tetouan-Al-Hoceima' )?"selected": "" }}  value="Tanger-Tetouan-Al-Hoceima" > Tanger-Tétouan-Al Hoceïma</option>
                                    <option {{ (  $post->region =='L-Oriental' )?"selected": "" }}  value="L-Oriental">  L'Oriental</option>
                                    <option {{ (  $post->region =='Fes-Meknes' )?"selected": "" }}  value="Fes-Meknes">  Fès-Meknès </option>
                                    <option {{ (  $post->region =='Rabat-Sale-Kenitra' )?"selected": "" }}  value="Rabat-Sale-Kenitra">   Rabat-Salé-Kénitra </option>
                                    <option {{ (  $post->region =='Beni-Mellal-Khenifra' )?"selected": "" }}  value="Beni-Mellal-Khenifra">    Béni Mellal-Khénifra </option>
                                    <option {{ (  $post->region =='Casablanca-Settat' )?"selected": "" }}  value="Casablanca-Settat">  Casablanca-Settat   </option>
                                    <option {{ (  $post->region =='Marrakech-Safi' )?"selected": "" }}  value="Marrakech-Safi"> Marrakech-Safi    </option>
                                    <option {{ (  $post->region =='Draa-Tafilalet' )?"selected": "" }}  value="Draa-Tafilalet">    Drâa-Tafilalet  </option>
                                    <option   value="Souss-Massa"   {{ (  $post->region =='Souss-Massa' )?"selected": "" }} >  Souss-Massa   </option>
                                    <option   value="Guelmim-Oued-Noun"  {{ (  $post->region =='Guelmim-Oued-Noun' )?"selected": "" }} >  Guelmim-Oued Noun   </option>
                                    <option {{ (  $post->region =='Laayoune-Sakia-El-Hamra' )?"selected": "" }}  value="Laayoune-Sakia-El-Hamra">  Laâyoune-Sakia El Hamra    </option>
                                    <option {{ (  $post->region =='Dakhla-Oued-Ed-Dahab' )?"selected": "" }}  value="Dakhla-Oued-Ed-Dahab">   Dakhla-Oued Ed-Dahab  </option>
                                    
                                </select> 
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="row mb-3">
                        <div class="">
                            <label for="" id='safii' > chese city </label>
                            <div class="form-floating mb-3 mb-md-0">
                                <select name="city" id="city" value="{{ $post->city }}" >
                                    <option hidden value="">  chosse city  </option>
                                    {{-- Tanger-Tetouan-Al-Hoceima --}}
                                    <option class="Tanger-Tetouan-Al-Hoceima" id="Al_Hoceima"    {{ (  $post->city =='Al Hoceima' )?"selected": "" }}   value="Al Hoceima"> Al Hoceima </option>
                                    <option class="Tanger-Tetouan-Al-Hoceima" id="Chefchaouen"    {{ (  $post->city =='Chefchaouen' )?"selected": "" }}   value="Chefchaouen"> Chefchaouen </option>
                                    <option class="Tanger-Tetouan-Al-Hoceima" id="Fahs_Anjra"   {{ (  $post->city =='Fahs Anjra' )?"selected": "" }}    value="Fahs Anjra"> Fahs Anjra </option>
                                    <option class="Tanger-Tetouan-Al-Hoceima" id="Larache"   {{ (  $post->city =='Larache' )?"selected": "" }}    value="Larache"> Larache </option>
                                    <option class="Tanger-Tetouan-Al-Hoceima" id="M_diq_Fnideq"   {{ (  $post->city =="M'diq-Fnideq" )?"selected": "" }}    value="M'diq-Fnideq"> M'diq-Fnideq </option>
                                    <option class="Tanger-Tetouan-Al-Hoceima" id="Ouezzane"    {{ (  $post->city =='Ouezzane' )?"selected": "" }}   value="Ouezzane"> Ouezzane </option>
                                    <option class="Tanger-Tetouan-Al-Hoceima" id="Tangier-Assilah"   {{ (  $post->city =='Tangier-Assilah' )?"selected": "" }}    value="Tangier-Assilah"> Tangier-Assilah </option>
                                    <option class="Tanger-Tetouan-Al-Hoceima" id="Tetouan"    {{ (  $post->city =='Tetouan' )?"selected": "" }}   value="Tetouan "> Tetouan </option>
                                    {{-- L-Oriental --}}
                                    <option class="L-Oriental" id="Berkane"   {{ (  $post->city =='Berkane' )?"selected": "" }}    value="Berkane"> Berkane</option>
                                    <option class="L-Oriental" id="Driouch"   {{ (  $post->city =='Driouch' )?"selected": "" }}    value="Driouch"> Driouch</option>
                                    <option class="L-Oriental" id="Figuig"   {{ (  $post->city =='Figuig' )?"selected": "" }}    value="Figuig"> Figuig</option>
                                    <option class="L-Oriental" id="Guercif"    {{ (  $post->city =='Guercif' )?"selected": "" }}   value="Guercif"> Guercif</option>
                                    <option class="L-Oriental" id="Jerada"   {{ (  $post->city =='Jerada' )?"selected": "" }}    value="Jerada"> Jerada</option>
                                    <option class="L-Oriental" id="Nador"   {{ (  $post->city =='Nador' )?"selected": "" }}    value="Nador"> Nador</option>
                                    <option class="L-Oriental" id="Oujda_Angad"   {{ (  $post->city =='Oujda-Angad' )?"selected": "" }}    value="Oujda-Angad"   {{ (  $post->city =='Oujda-Angad' )?"selected": "" }}  > Oujda-Angad</option>
                                    <option class="L-Oriental" id="Taourirt"    {{ (  $post->city =='Taourirt' )?"selected": "" }}   value="Taourirt"> Taourirt</option>
                                    {{-- Fes-Meknes --}}
                                    <option class="Fes-Meknes" id="Boulemane" {{ (  $post->city =='Boulemane' )?"selected": "" }}    value="Boulemane"> Boulemane </option>
                                    <option class="Fes-Meknes" id="Fes" {{ (  $post->city =='Fes' )?"selected": "" }}    value="Fes"> Fes </option>
                                    <option class="Fes-Meknes" id="Ifrane" {{ (  $post->city =='Ifrane' )?"selected": "" }}    value="Ifrane"> Ifrane </option>
                                    <option class="Fes-Meknes" id="Meknes"  {{ (  $post->city =='Meknès' )?"selected": "" }}   value="Meknes"> Meknès </option>
                                    <option class="Fes-Meknes" id="Moulay_Yaacoub"  {{ (  $post->city =='Moulay Yaâcoub' )?"selected": "" }}   value="Moulay Yaâcoub"> Moulay Yaâcoub	 </option>
                                    <option class="Fes-Meknes" id="Sefrou"  {{ (  $post->city =='Séfrou' )?"selected": "" }}   value="Séfrou"> Séfrou </option>
                                    <option class="Fes-Meknes" id="Taounate" {{ (  $post->city =='Taounate' )?"selected": "" }}    value="Taounate"> Taounate </option>
                                    <option class="Fes-Meknes" id="Taza"  {{ (  $post->city =='Taza' )?"selected": "" }}   value="Taza"> Taza </option>
                                    {{-- Rabat-Sale-Kenitra --}}
                                    <option class="Rabat-Sale-Kenitra"  {{ (  $post->city =='Rabat' )?"selected": "" }}   id="Rabat" value="Rabat"> Rabat </option>
                                    <option class="Rabat-Sale-Kenitra"  {{ (  $post->city =='Salé' )?"selected": "" }}   id="Sale" value="Salé"> Salé </option>
                                    <option class="Rabat-Sale-Kenitra"  {{ (  $post->city =='Skhirate-Témara' )?"selected": "" }}   id="Skhirate-Temara" value="Skhirate-Témara"> Skhirate-Témara </option>
                                    <option class="Rabat-Sale-Kenitra"  {{ (  $post->city =='Kénitra' )?"selected": "" }}   id="Kenitra" value="Kénitra"> Kénitra </option>
                                    <option class="Rabat-Sale-Kenitra"  {{ (  $post->city =='Sidi Kacem' )?"selected": "" }}   id="Sidi-Kacem" value="Sidi Kacem"> Sidi Kacem </option>
                                    <option class="Rabat-Sale-Kenitra"  {{ (  $post->city =='Sidi Slimane' )?"selected": "" }}   id="Sidi-Slimane" value="Sidi Slimane"> Sidi Slimane </option>
                                    <option class="Rabat-Sale-Kenitra"  {{ (  $post->city =='Khemisset' )?"selected": "" }}   id="Khemisset" value="Khemisset"> Khemisset </option>
                                    {{-- Beni-Mellal-Khenifra --}}
                                    <option class="Beni-Mellal-Khenifra" id="Azilal" value="Azilal" {{ (  $post->city =='Azilal' )?"selected": "" }}  > Azilal </option>
                                    <option class="Beni-Mellal-Khenifra" id="Beni-Mellal" value="Béni Mellal" {{ (  $post->city =='Béni Mellal' )?"selected": "" }}  > Béni Mellal </option>
                                    <option class="Beni-Mellal-Khenifra" id="Fquih-Ben-Salah" value="Fquih Ben Salah" {{ (  $post->city =='Fquih Ben Salah' )?"selected": "" }}  > Fquih Ben Salah </option>
                                    <option class="Beni-Mellal-Khenifra" id="Khenifra" value="Khénifra" {{ (  $post->city =='Khénifra' )?"selected": "" }}  > Khénifra </option>
                                    <option class="Beni-Mellal-Khenifra" id="Khouribga" value="Khouribga"  {{ (  $post->city =='Khouribga' )?"selected": "" }}  > Khouribga </option>
                                    {{-- Casablanca-Settat --}}
                                    <option class="Casablanca-Settat"  {{ (  $post->city =='Benslimane' )?"selected": "" }}   id="Benslimane" value="Benslimane"> Benslimane </option>
                                    <option class="Casablanca-Settat"  {{ (  $post->city =='Berrechid' )?"selected": "" }}   id="Berrechid" value="Berrechid"> Berrechid </option>
                                    <option class="Casablanca-Settat"  {{ (  $post->city =='Casablanca' )?"selected": "" }}   id="Casablanca" value="Casablanca"> Casablanca </option>
                                    <option class="Casablanca-Settat"  {{ (  $post->city =='El Jadida' )?"selected": "" }}   id="El-Jadida" value="El Jadida">  El Jadida </option>
                                    <option class="Casablanca-Settat"  {{ (  $post->city =='Médiouna' )?"selected": "" }}   id="Mediouna" value="Médiouna"> Médiouna </option>
                                    <option class="Casablanca-Settat"  {{ (  $post->city =='Mohammadia' )?"selected": "" }}   id="Mohammadia" value="Mohammadia"> Mohammadia </option>
                                    <option class="Casablanca-Settat"  {{ (  $post->city =='Nouaceur' )?"selected": "" }}   id="Nouaceur" value="Nouaceur"> Nouaceur </option>
                                    <option class="Casablanca-Settat"  {{ (  $post->city =='Settat' )?"selected": "" }}   id="Settat" value="Settat"> Settat </option>
                                    <option class="Casablanca-Settat"  {{ (  $post->city =='Sidi-Bennour' )?"selected": "" }}   id="Sidi-Bennour" value="Sidi-Bennour"> Sidi Bennour </option>
                                    {{-- Marrakech-Safi --}}
                                    <option class="Marrakech-Safi" id="Marrakech" value="Marrakech" {{ (  $post->city =='Marrakech' )?"selected": "" }} > Marrakech </option>
                                    <option class="Marrakech-Safi" id="Al Haouz" value="Al Haouz" {{ (  $post->city =='Al Haouz' )?"selected": "" }} > Al Haouz </option>
                                    <option class="Marrakech-Safi" id="El Kelâa des Sraghna" value="El Kelâa des Sraghna"> El Kelâa des Sraghna </option>
                                    <option class="Marrakech-Safi" id="Essaouira" value="Essaouira" {{ (  $post->city =='Essaouira' )?"selected": "" }} > Essaouira </option>
                                    <option class="Marrakech-Safi" id="Chemaia" value="Chemaia" {{ (  $post->city =='Chemaia' )?"selected": "" }} > Chemaia </option>
                                    <option class="Marrakech-Safi" id="Rehamna" value="Rehamna" {{ (  $post->city =='Rehamna' )?"selected": "" }} > Rehamna </option>
                                    <option class="Marrakech-Safi" id="Safi" value="Safi" {{ (  $post->city =='Safi' )?"selected": "" }}  > Safi </option>
                                    <option class="Marrakech-Safi" id="Youssoufia" value="Youssoufia" {{ (  $post->city =='Youssoufia' )?"selected": "" }} > Youssoufia </option>
                                    {{-- Draa-Tafilalet --}}
                                    <option class="Draa-Tafilalet" id="Errachidia" value="Errachidia"> Errachidia </option>
                                    <option class="Draa-Tafilalet" id="Ouarzazate" value="Ouarzazate"> Ouarzazate </option>
                                    <option class="Draa-Tafilalet" id="Midelt" value="Midelt"> Midelt </option>
                                    <option class="Draa-Tafilalet" id="Tinghir" value="Tinghir"> Tinghir </option>
                                    <option class="Draa-Tafilalet" id="Zagora" value="Zagora"> Zagora </option>
                                    {{-- Souss-Massa --}}
                                    <option class="Souss-Massa" id="Agadir-Ida-Ou-Tanane" value="Agadir-Ida Ou Tanane"> Agadir-Ida Ou Tanane </option>
                                    <option class="Souss-Massa" id="Chtouka-Ait-Baha" value="Chtouka-Aït Baha "> Chtouka-Aït Baha  </option>
                                    <option class="Souss-Massa" id="Inezgane-Ait-Melloul" value="Inezgane-Aït Melloul"> Inezgane-Aït Melloul </option>
                                    <option class="Souss-Massa" id="Taroudannt" value="Taroudannt"> Taroudannt </option>
                                    <option class="Souss-Massa" id="Tata" value="Tata"> Tata </option>
                                    <option class="Souss-Massa" id="Tiznit" value="Tiznit"> Tiznit </option>
                                    {{-- Guelmim-Oued-Noun --}}
                                    <option class="Guelmim-Oued-Noun" id="Assa-Zag " value="Assa-Zag "> Assa-Zag  </option>
                                    <option class="Guelmim-Oued-Noun" id="Guelmim" value="Guelmim"> Guelmim </option>
                                    <option class="Guelmim-Oued-Noun" id="Sidi-Ifni" value="Sidi Ifni"> Sidi Ifni </option>
                                    <option class="Guelmim-Oued-Noun" id="Tan-Tan" value="Tan-Tan"> Tan-Tan </option>
                                    {{-- Laayoune-Sakia-El-Hamra --}}
                                    <option class="Laayoune-Sakia-El-Hamra" id="Boujdour" value="Boujdour"> Boujdour </option>
                                    <option class="Laayoune-Sakia-El-Hamra" id="Es-Semara" value="Es Semara"> Es Semara </option>
                                    <option class="Laayoune-Sakia-El-Hamra" id="Laayoune" value="Laâyoune"> Laâyoune </option>
                                    <option class="Laayoune-Sakia-El-Hamra" id="Tarfaya" value="Tarfaya"> Tarfaya </option>
                                    {{-- Dakhla-Oued-Ed-Dahab --}}
                                    <option class="Dakhla-Oued-Ed-Dahab" id="Aousserd" value="Aousserd"> Aousserd </option>
                                    <option class="Dakhla-Oued-Ed-Dahab" id="Oued-Ed-Dahab" value="Oued Ed-Dahab"> Oued Ed-Dahab </option>





                                </select> 
                            </div>
                        </div>
                    </div>

                    
                    <div class="row mb-3">
                            <div class="col-md-12">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="number_whats_app" type="number" name="number_whats_app" value="{{ $post->number_whats_app }}"  placeholder="Confirm number_whats_app">
                                    <label for="number_whats_app">Confirm number_whats_app</label>
                                </div>
                            </div>
                    </div>
                
                    <div class="mt-4 mb-0">
                        <div class="d-grid">
                            <input  type="submit" value="Create Account"  class="btn btn-primary btn-block" >
                        </div>
                    </div>
                </form>
            </div>

          
        </div>
    </div>
</div>


@endsection