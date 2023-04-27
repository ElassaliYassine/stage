@extends('layouts.app')
@section('content')
    

   


<div class="row justify-content-center">
    <div class="col-lg-5 col-md-4">
        <div class="card shadow border-0 rounded-lg mt-5">
            <div class="card-header"><h3 class="text-center font-weight-light my-4">Create post</h3></div>
            <div class="card-body">
                <form  method="post" action="/post"  enctype="multipart/form-data" >
                    @csrf
                      {{-- // user_id  // categorie  // title  // description  // price  // image_path  // region  // city  // number_whats_app --}}
                    <input hidden type="number" name="user_id" value="{{Auth::user()->id}}"   name="user_id" />                
                    <div class="row mb-3">
                        <div class="">
                            <label for=""> chese category </label>
                            <div class="form-floating mb-3 mb-md-0">
                                <select name="categorie"  id="inputFirstName">
                                    <option  hidden value="" > chese category </option>
                                    <option value="building"> Building</option>
                                    <option value="craftsmen"> craftsmen</option>
                                    <option value="electronic maintenance"> electronic maintenance</option>
                                    <option value="home repairs"> home repairs</option>
                                    <option value="food services"> food services</option>
                                    <option value="transport and transportation"> transport and transportation</option>
                                    <option value="local products"> local products</option>
                                    <option value="other services"> other services</option>
                                </select>
                                
                            </div>
                        </div>
                        <span class="text-danger">
                            @error('categorie')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </span>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input class="form-control" id="title"  name="title"  type="text" placeholder="Enter your title">
                                <label for="title">title</label>
                                @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                   

                    <div class="form-floating mb-3">
                        <label for="description  " >description</label>
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control h-50 py-5 "  > </textarea>
                        @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>


                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" id="price" name="price"  value="check with the  seller "  type="text" placeholder="Create a price">
                                <label for="inputPassword">Price</label>
                            </div>
                            @error('price')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>



                    <div class="row mb-3">
                        <label for="image_path">Confirm image_path</label>
                        <div class="col-md-12">
                            <div class="form -floating mb-3 mb-md-0">
                                <input  class="form-control" id="image_path" type="file" name="image_path[]" multiple  placeholder="Confirm image_path"    >
                            </div>
                            @error('image_path')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    

                    
                    
                    <div class="row mb-3">
                        <div class="">
                            <label for=""> chese region </label>
                            <div class="form-floating mb-3 mb-md-0">
                                <select name="region" id="region"  onclick="showCity(this.value)"   >
                                    <option   hidden value="" > chese region </option>
                                    <option value="Tanger-Tetouan-Al-Hoceima" > Tanger-Tétouan-Al Hoceïma</option>
                                    <option value="L-Oriental">  L'Oriental</option>
                                    <option value="Fes-Meknes">  Fès-Meknès </option>
                                    <option value="Rabat-Sale-Kenitra">   Rabat-Salé-Kénitra </option>
                                    <option value="Beni-Mellal-Khenifra">    Béni Mellal-Khénifra </option>
                                    <option value="Casablanca-Settat">  Casablanca-Settat   </option>
                                    <option value="Marrakech-Safi"> Marrakech-Safi    </option>
                                    <option value="Draa-Tafilalet">    Drâa-Tafilalet  </option>
                                    <option value="Souss-Massa">  Souss-Massa   </option>
                                    <option value="Guelmim-Oued-Noun">  Guelmim-Oued Noun   </option>
                                    <option value="Laayoune-Sakia-El-Hamra">  Laâyoune-Sakia El Hamra    </option>
                                    <option value="Dakhla-Oued-Ed-Dahab">   Dakhla-Oued Ed-Dahab  </option>
                                    
                                </select> 
                            </div>
                        </div>
                        @error('region')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    
                    
                    
                    <div class="row mb-3">
                        <div class="">
                            <label for="" id='safii' > chosse city </label>
                            <div class="form-floating mb-3 mb-md-0">
                                <select name="city" id="city"  >
                                    <option hidden value="">  chosse city  </option>
                                    {{-- Tanger-Tetouan-Al-Hoceima --}}
                                    <option class="G_Tanger" id="Al_Hoceima" value="Al Hoceima"> Al Hoceima </option>
                                    <option class="G_Tanger" id="Chefchaouen" value="Chefchaouen"> Chefchaouen </option>
                                    <option class="G_Tanger" id="Fahs_Anjra" value="Fahs Anjra"> Fahs Anjra </option>
                                    <option class="G_Tanger" id="Larache" value="Larache"> Larache </option>
                                    <option class="G_Tanger" id="M_diq_Fnideq" value="M'diq-Fnideq"> M'diq-Fnideq </option>
                                    <option class="G_Tanger" id="Ouezzane" value="Ouezzane"> Ouezzane </option>
                                    <option class="G_Tanger" id="Tangier-Assilah" value="Tangier-Assilah "> Tangier-Assilah </option>
                                    <option class="G_Tanger" id="Tetouan" value="Tetouan "> Tetouan </option>
                                    {{-- L-Oriental --}}
                                    <option class="G_Oriental" id="Berkane" value="Berkane"> Berkane</option>
                                    <option class="G_Oriental" id="Driouch" value="Driouch"> Driouch</option>
                                    <option class="G_Oriental" id="Figuig" value="Figuig"> Figuig</option>
                                    <option class="G_Oriental" id="Guercif" value="Guercif"> Guercif</option>
                                    <option class="G_Oriental" id="Jerada" value="Jerada"> Jerada</option>
                                    <option class="G_Oriental" id="Nador" value="Nador"> Nador</option>
                                    <option class="G_Oriental" id="Oujda_Angad" value="Oujda-Angad"> Oujda-Angad</option>
                                    <option class="G_Oriental" id="Taourirt" value="Taourirt"> Taourirt</option>
                                    {{-- Fes-Meknes --}}
                                    <option class="G_Fes" id="Boulemane" value="Boulemane"> Boulemane </option>
                                    <option class="G_Fes" id="Fes" value="Fes"> Fes </option>
                                    <option class="G_Fes" id="Ifrane" value="Ifrane"> Ifrane </option>
                                    <option class="G_Fes" id="Meknes" value="Meknes"> Meknès </option>
                                    <option class="G_Fes" id="Moulay_Yaacoub" value="Moulay Yaâcoub	"> Moulay Yaâcoub	 </option>
                                    <option class="G_Fes" id="Sefrou" value="Séfrou"> Séfrou </option>
                                    <option class="G_Fes" id="Taounate" value="Taounate"> Taounate </option>
                                    <option class="G_Fes" id="Taza" value="Taza"> Taza </option>
                                    {{-- Rabat-Sale-Kenitra --}}
                                    <option class="G_Rabat" id="Rabat" value="Rabat"> Rabat </option>
                                    <option class="G_Rabat" id="Sale" value="Salé"> Salé </option>
                                    <option class="G_Rabat" id="Skhirate-Temara" value="Skhirate-Témara"> Skhirate-Témara </option>
                                    <option class="G_Rabat" id="Kenitra" value="Kénitra"> Kénitra </option>
                                    <option class="G_Rabat" id="Sidi-Kacem" value="Sidi Kacem"> Sidi Kacem </option>
                                    <option class="G_Rabat" id="Sidi-Slimane" value="Sidi Slimane"> Sidi Slimane </option>
                                    <option class="G_Rabat" id="Khemisset" value="Khemisset"> Khemisset </option>
                                    {{-- Beni-Mellal-Khenifra --}}
                                    <option class="G_Beni" id="Beni-Mellal" value="Béni Mellal"> Béni Mellal </option>
                                    <option class="G_Beni" id="Fquih-Ben-Salah" value="Fquih Ben Salah"> Fquih Ben Salah </option>
                                    <option class="G_Beni" id="Azilal" value="Azilal"> Azilal </option>
                                    <option class="G_Beni" id="Khenifra" value="Khénifra"> Khénifra </option>
                                    <option class="G_Beni" id="Khouribga" value="Khouribga"> Khouribga </option>
                                    {{-- Casablanca-Settat --}}
                                    <option class="G_Casablanca" id="Benslimane" value="Benslimane"> Benslimane </option>
                                    <option class="G_Casablanca" id="Berrechid" value="Berrechid"> Berrechid </option>
                                    <option class="G_Casablanca" id="Casablanca" value="Casablanca"> Casablanca </option>
                                    <option class="G_Casablanca" id="El-Jadida" value="El Jadida">  El Jadida </option>
                                    <option class="G_Casablanca" id="Mediouna" value="Médiouna"> Médiouna </option>
                                    <option class="G_Casablanca" id="Mohammadia" value="Mohammadia"> Mohammadia </option>
                                    <option class="G_Casablanca" id="Nouaceur" value="Nouaceur"> Nouaceur </option>
                                    <option class="G_Casablanca" id="Settat" value="Settat"> Settat </option>
                                    <option class="G_Casablanca" id="Sidi-Bennour" value="Sidi-Bennour"> Sidi Bennour </option>
                                    {{-- Marrakech-Safi --}}
                                    <option class="G_Marrakech" id="Marrakech" value="Marrakech"> Marrakech </option>
                                    <option class="G_Marrakech" id="Al Haouz" value="Al Haouz"> Al Haouz </option>
                                    <option class="G_Marrakech" id="El Kelâa des Sraghna" value="El Kelâa des Sraghna"> El Kelâa des Sraghna </option>
                                    <option class="G_Marrakech" id="Essaouira" value="Essaouira"> Essaouira </option>
                                    <option class="G_Marrakech" id="Chemaia" value="Chemaia"> Chemaia </option>
                                    <option class="G_Marrakech" id="Rehamna" value="Rehamna"> Rehamna </option>
                                    <option class="G_Marrakech" id="Safi" value="Safi"> Safi </option>
                                    <option class="G_Marrakech" id="Youssoufia" value="Youssoufia"> Youssoufia </option>
                                    {{-- Draa-Tafilalet --}}
                                    <option class="G_Draa" id="Errachidia" value="Errachidia"> Errachidia </option>
                                    <option class="G_Draa" id="Ouarzazate" value="Ouarzazate"> Ouarzazate </option>
                                    <option class="G_Draa" id="Midelt" value="Midelt"> Midelt </option>
                                    <option class="G_Draa" id="Tinghir" value="Tinghir"> Tinghir </option>
                                    <option class="G_Draa" id="Zagora" value="Zagora"> Zagora </option>
                                    {{-- Souss-Massa --}}
                                    <option class="G_Souss" id="Agadir-Ida-Ou-Tanane" value="Agadir-Ida Ou Tanane"> Agadir-Ida Ou Tanane </option>
                                    <option class="G_Souss" id="Chtouka-Ait-Baha" value="Chtouka-Aït Baha "> Chtouka-Aït Baha  </option>
                                    <option class="G_Souss" id="Inezgane-Ait-Melloul" value="Inezgane-Aït Melloul"> Inezgane-Aït Melloul </option>
                                    <option class="G_Souss" id="Taroudannt" value="Taroudannt"> Taroudannt </option>
                                    <option class="G_Souss" id="Tata" value="Tata"> Tata </option>
                                    <option class="G_Souss" id="Tiznit" value="Tiznit"> Tiznit </option>
                                    {{-- Guelmim-Oued-Noun --}}
                                    <option class="G_Guelmim" id="Assa-Zag " value="Assa-Zag "> Assa-Zag  </option>
                                    <option class="G_Guelmim" id="Guelmim" value="Guelmim"> Guelmim </option>
                                    <option class="G_Guelmim" id="Sidi-Ifni" value="Sidi Ifni"> Sidi Ifni </option>
                                    <option class="G_Guelmim" id="Tan-Tan" value="Tan-Tan"> Tan-Tan </option>
                                    {{-- Laayoune-Sakia-El-Hamra --}}
                                    <option class="G_Laayoune" id="Boujdour" value="Boujdour"> Boujdour </option>
                                    <option class="G_Laayoune" id="Es-Semara" value="Es Semara"> Es Semara </option>
                                    <option class="G_Laayoune" id="Laayoune" value="Laâyoune"> Laâyoune </option>
                                    <option class="G_Laayoune" id="Tarfaya" value="Tarfaya"> Tarfaya </option>
                                    {{-- Dakhla-Oued-Ed-Dahab --}}
                                    <option class="G_Dakhla" id="Aousserd" value="Aousserd"> Aousserd </option>
                                    <option class="G_Dakhla" id="Oued-Ed-Dahab" value="Oued Ed-Dahab"> Oued Ed-Dahab </option>





                                </select> 
                            </div>
                        </div>
                        @error('city')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    
                    <div class="row mb-3">
                            <div class="col-md-12">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="number_whats_app" type="number" name="number_whats_app" placeholder="Confirm number_whats_app">
                                    <label for="number_whats_app">Confirm number_whats_app</label>
                                </div>
                            </div>
                            @error('number_whats_app')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>






                
                    <div class="mt-4 mb-0">
                        <div class="d-grid">
                            <input  type="submit" value="Create Account"  class="btn btn-primary btn-block" >
                        </div>
                    </div>
                </form>
            </div>

            {{-- <div class="card-footer text-center py-3">
                <div class="small"><a href="login.html">Have an account? Go to login</a></div>
            </div> --}}
        </div>
    </div>
</div>

@endsection


<script src="/js/main.js" ></script>