<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title >ABP School</title>
  @extends('layouts.head')

</head>
<body style="height: 100vh;">



    @include('layouts.side_bar')
    <div class="main-side col-10 container  gx-5"   >
            <div class="row  d-flex align-items-center w-100 " style="flex-wrap: nowrap;height: 10%;">
                <h1 class="h1  text gx-5 mt-3 col-9 ms-1" style="font-size: max(6vw,30px); ">Tous les formations</h1>
                <div class="d-flex w-25 darkswitch" style="justify-content: flex-end;" >
                     <div class=" col-2  d-flex rounded-pill justify-self-center  ps-1 pb-1 position-relative" style="border: #00B3FF solid 3px;width: 60px;z-index: -5;">
                    <div class="sun me-2 " style="margin-left: 1px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" fill="currentColor" class="bi bi-brightness-high-fill" viewBox="0 0 16 16">
                            <path d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
                          </svg>
                    </div>
                    <div class="moon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-fill" viewBox="0 0 16 16">
                            <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
                          </svg>
                            
                    </div>
                    <div class="bg rounded-circle bg-primary position-absolute  " style="z-index: -10; top: 7%; width: 43%; height: 85%;"></div>
                </div>
                </div>
               
            </div>
            <div class="row  gy-10 " style="height: 90%;">

                <div class="left-side  col-md h-100  d-flex align-items-center" style="overflow: scroll;">
                <div class=" w-100  container border background" style=" height: 90%;overflow: scroll;border-radius: 20px;">
                  <div class="top w-100 row align-items-center" style="height: 15%;">
                    <div class="col">
                        <input type="email" class="form-control" id="exampleInputEmail1"  placeholder="recherche" aria-describedby="emailHelp">

                    </div>
                    <div class="add-btn col-5 d-flex gx-1 justify-content-end  ">
                        <button type="button" class=" add-btn-formation btn btn-primary d-inline-flex align-items-center">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffffff" class="bi bi-plus" viewBox="0 0 16 16">
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                          </svg>
                            <p class=" text-light d-none d-md-block fw-light ms-1 mb-0 overflow-hidden" >ajouter une formation</p>
                        </button>
                        <button type="button" class="btn btn-danger ms-2">
                            <svg width="23" height="25" viewBox="0 0 23 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.5633 5.6818H15.98V4.70452C15.98 3.04316 14.8154 1.77271 13.2925 1.77271H9.70914C8.18622 1.77271 7.02164 3.04316 7.02164 4.70452V5.6818H3.43831C2.90081 5.6818 2.54248 6.07271 2.54248 6.65907C2.54248 7.24543 2.90081 7.63634 3.43831 7.63634H4.33414V20.3409C4.33414 22.0023 5.49873 23.2727 7.02164 23.2727H15.98C17.5029 23.2727 18.6675 22.0023 18.6675 20.3409V7.63634H19.5633C20.1008 7.63634 20.4591 7.24543 20.4591 6.65907C20.4591 6.07271 20.1008 5.6818 19.5633 5.6818ZM8.81299 4.7045C8.81299 4.11814 9.17132 3.72723 9.70882 3.72723H13.2921C13.8296 3.72723 14.188 4.11814 14.188 4.7045V5.68177H8.81299V4.7045ZM15.9796 21.3181C16.5171 21.3181 16.8755 20.9272 16.8755 20.3409V7.63632H6.12549V20.3409C6.12549 20.9272 6.48382 21.3181 7.02132 21.3181H15.9796ZM10.6047 11.5454V17.409C10.6047 17.9954 10.2463 18.3863 9.70882 18.3863C9.17132 18.3863 8.81299 17.9954 8.81299 17.409V11.5454C8.81299 10.959 9.17132 10.5681 9.70882 10.5681C10.2463 10.5681 10.6047 10.959 10.6047 11.5454ZM14.1883 17.409V11.5454C14.1883 10.959 13.83 10.5681 13.2925 10.5681C12.755 10.5681 12.3966 10.959 12.3966 11.5454V17.409C12.3966 17.9954 12.755 18.3863 13.2925 18.3863C13.83 18.3863 14.1883 17.9954 14.1883 17.409Z" fill="#F53131"/>
                                <mask id="mask0_80_3515" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="2" y="1" width="19" height="23">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.5633 5.6818H15.98V4.70452C15.98 3.04316 14.8154 1.77271 13.2925 1.77271H9.70914C8.18622 1.77271 7.02164 3.04316 7.02164 4.70452V5.6818H3.43831C2.90081 5.6818 2.54248 6.07271 2.54248 6.65907C2.54248 7.24543 2.90081 7.63634 3.43831 7.63634H4.33414V20.3409C4.33414 22.0023 5.49873 23.2727 7.02164 23.2727H15.98C17.5029 23.2727 18.6675 22.0023 18.6675 20.3409V7.63634H19.5633C20.1008 7.63634 20.4591 7.24543 20.4591 6.65907C20.4591 6.07271 20.1008 5.6818 19.5633 5.6818ZM8.81299 4.7045C8.81299 4.11814 9.17132 3.72723 9.70882 3.72723H13.2921C13.8296 3.72723 14.188 4.11814 14.188 4.7045V5.68177H8.81299V4.7045ZM15.9796 21.3181C16.5171 21.3181 16.8755 20.9272 16.8755 20.3409V7.63632H6.12549V20.3409C6.12549 20.9272 6.48382 21.3181 7.02132 21.3181H15.9796ZM10.6047 11.5454V17.409C10.6047 17.9954 10.2463 18.3863 9.70882 18.3863C9.17132 18.3863 8.81299 17.9954 8.81299 17.409V11.5454C8.81299 10.959 9.17132 10.5681 9.70882 10.5681C10.2463 10.5681 10.6047 10.959 10.6047 11.5454ZM14.1883 17.409V11.5454C14.1883 10.959 13.83 10.5681 13.2925 10.5681C12.755 10.5681 12.3966 10.959 12.3966 11.5454V17.409C12.3966 17.9954 12.755 18.3863 13.2925 18.3863C13.83 18.3863 14.1883 17.9954 14.1883 17.409Z" fill="white"/>
                                </mask>
                                <g mask="url(#mask0_80_3515)">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.750488 0.79541H22.2505V24.25H0.750488V0.79541Z" fill="white" fill-opacity="0.8"/>
                                </g>
                                </svg>
                                
                        </button>
                    </div>
                    
                </div>
                <div class="bottom  row w-100 gx-0 " >
                    <table class="table table-hover">
                        <thead>
                            <tr>
                              <th scope="col"><div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="selectAll">
                                <label class="form-check-label" for="defaultCheck1">
                                
                                </label>
                              </div></th>
                              <th scope="col">Name <svg width="8" height="16" viewBox="0 0 8 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.46434 5.25L4.00023 0L0.536133 5.25H7.46434Z" fill="#343A40"/>
                                <path d="M0.536133 10.75L4.00023 16L7.46434 10.75L0.536133 10.75Z" fill="#343A40"/>
                                </svg>
                                 </th>
                              <th scope="col">Type <svg width="8" height="16" viewBox="0 0 8 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.46434 5.25L4.00023 0L0.536133 5.25H7.46434Z" fill="#343A40"/>
                                <path d="M0.536133 10.75L4.00023 16L7.46434 10.75L0.536133 10.75Z" fill="#343A40"/>
                                </svg>
                                </th>
                                <th scope="col">enseignant <svg width="8" height="16" viewBox="0 0 8 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.46434 5.25L4.00023 0L0.536133 5.25H7.46434Z" fill="#343A40"/>
                                    <path d="M0.536133 10.75L4.00023 16L7.46434 10.75L0.536133 10.75Z" fill="#343A40"/>
                                    </svg>
                                    </th>
                                    <th>etudiants</th>
                              
                            </tr>
                          </thead>
                          <tbody>
                          
                            <tr>
                              <th scope="row"><div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                
                                </label>
                              </div></th>                

                              <td>    <a href="./formationInformation.html"> maths 1as</a></td>
                              <td>Cours de soutiens</td>
                              <td>saidani mahmoud</td>
                           
                              <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people ms-5 " viewBox="0 0 16 16" >
                                <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z "/>
                              </svg>
                                </td>
                            </tr>
                            <tr>
                              <th scope="row"><div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                
                                </label>
                              </div></th>                

                              <td>    <a href="./formationInformation.html"> maths 1as</a></td>
                              <td>Cours de soutiens</td>
                              <td>saidani mahmoud</td>
                           
                              <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people ms-5 " viewBox="0 0 16 16" >
                                <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z "/>
                              </svg>
                                </td>
                            </tr>
                            <tr>
                              <th scope="row"><div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                
                                </label>
                              </div></th>                

                              <td>    <a href="./formationInformation.html"> maths 1as</a></td>
                              <td>Cours de soutiens</td>
                              <td>saidani mahmoud</td>
                           
                              <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people ms-5 " viewBox="0 0 16 16" >
                                <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z "/>
                              </svg>
                                </td>
                            </tr>
                        
                 
                          </tbody>
                      </table>
                </div>
                    </div>
                </div>
            </div>

            </div>

            </div>
         
            </div>
        </div>

       
      <div class="front d-flex justify-content-center w-100 h-100  row d-none m-0 " style=" z-index: 10; position: absolute; top: 0; ">
        <div class="blur " style="z-index: 9;">
        </div>
        <div class="conatiner h-100 row position-absolute top-0 left-0 justify-content-center align-items-center " >
           <div class="ajout-popup col-9 col-lg-4 d-none  border background" style="max-width: 400px; z-index: 20; height: 90%; border-radius: 20px;">
            <div class="p-4">
              <form>
                  <div class="mb-3">
                      <label for="" class="form-label" style="font: bolder;"><h6> Nom et Prénom:</h6></label>
                      <input class="form-control" type="text" placeholder="" aria-label="default input example">
                  </div>
              <div class="mb-3">
                  <div class="form-group">
                      <label for="inputPhoneNumber"><h6 class="mt-2"> Numéro de Téléphone:</h6></label>
                      <input type="tel" class="form-control" id="inputPhoneNumber"  pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
                  </div>
              </div>
              <div class=" mt-4 d- flex align-items-center">
                  <button type="button " class="mb-1 btn btn-outline-primary" style="border-radius: 20px; padding-bottom: 4px; padding-top: 4px;" disabled >Math 1as
                      
                      <svg xmlns="http://www.w3.org/2000/svg"  width="16" height="16" fill="currentColor"  class="bi bi-x" viewBox="0 0 16 16">
                          <path  d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                  </button>
                  <button type="button " class="mb-1 btn btn-outline-primary" style="border-radius: 20px; padding-bottom: 4px; padding-top: 4px;" disabled >Anglais 1as
                      
                      <svg xmlns="http://www.w3.org/2000/svg"  width="16" height="16" fill="currentColor"  class="bi bi-x" viewBox="0 0 16 16">
                          <path  d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                  </button>
                  <button type="button " class="mb-1 btn btn-outline-primary" style="border-radius: 20px; padding-bottom: 4px; padding-top: 4px;" disabled >Français 2as
                      
                      <svg xmlns="http://www.w3.org/2000/svg"  width="16" height="16" fill="currentColor"  class="bi bi-x" viewBox="0 0 16 16">
                          <path  d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                  </button>
    
    
                  
              </div>
    
                  <button class="btn btn-primary rounded-pill mt-2" type="submit" style="color: white;">Ajouter une formation</button>
                  <div class="mb-1">
                  <label for="exampleInputEmail1" class="form-label "><h6 class="mt-3">Adresse Email:</h6></label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  
                  <div class="mb-4">
                      <label for="" class="form-label mt-2"><h6>Adresse de Résidence:</h6></label>
                      <input class=" mb-5 form-control" type="text" placeholder="" aria-label="default input example">
                  </div>
    
                  <div class="mb-5 d-flex justify-content-end mw-100">
                  <button type="submit" class="btn btn-primary "style="color: white;" data-bs-toggle="button" aria-pressed="true">Confirmer</button>
                  </div>
              </form>
          </div> 
          
          </div>
        </div>
       
       
    </div>
    

<div class="background" style="overflow: hidden; width: 100%; height: 100%; top: 0%; right: 0%; position: absolute;z-index: -10; "> 

    <div class="grad " style="
        position: absolute;
        width: 100%;
        bottom: 0;
        height: 100%;
        z-index: -5;
        opacity: 80%;
        background-image: linear-gradient(0deg, #0c88bc, rgba(0,179,255,0) 50%);">
        </div>
 
        <div class="glass " style="
        position: absolute;
        width: 100%;
        height: 100%;
        z-index: -7;
        backdrop-filter: blur(20px) ;"        
        ></div>

    
    
    <div class="groupe-circles" style="height: 100%; overflow: hidden; width: 100vw; z-index: -10 ;position: fixed; top: 0%; left: 0%;">
        <div class="circle" style="
        position: relative;
        z-index: -8;
            border-radius: 200%;
            width: 40%;
            aspect-ratio: 1/0.8;
            opacity: 100%;
            background-image: radial-gradient( rgba(1, 187, 249, 0.866),rgba(1, 187, 249, 0)  );
            top: 20%;
            right: -10%;

            "> </div>
            <div class="circle" style="
             z-index: -8;
            position: absolute;
                border-radius: 200%;
                width: 35%;
                aspect-ratio: 1/1;
                opacity: 100%;
                background-image: radial-gradient( rgba(1, 187, 249, 0.866),rgba(1, 187, 249, 0)  );
                top: -10%;
                left: 60%;

                "> </div>
            <div class="circle" style="
             z-index: -30;
            position: absolute;
                border-radius: 200%;
                width: 40%;
                aspect-ratio: 1/0.9;
                opacity: 100%;
                background-image: radial-gradient( rgba(1, 187, 249, 0.866),rgba(1, 187, 249, 0)  );
                top: 60%;
                left: 50%;
                rotate: 45deg;
                "> </div>
    </div>
      </div>
      @extends('layouts.footer-scripts')
</body>
</html>