<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title >ABP School</title>
    <link rel="stylesheet" href="./css/custom.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body style="height: 100vh;">



   @include('layouts.side_bar')

    <div class="main-side col-10 container  gx-5"   >
            <div class="row  d-flex align-items-center w-100 " style="flex-wrap: nowrap;height: 10%;">
                <h1 class="h1  text gx-5 mt-3 col-9 ms-1" style="font-size: max(6vw,30px); ">Tous les etudiants</h1>
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
                        <div class=" p-4 mb-1  ms-1 me-1  row">
                            <div class="first-side col" >
                                 <p  class=" mb-0 ">Categorie:</p>
                                 <select style="width: 200px; height: 27px; justify-content: center;" class=" mb-3 form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option selected value="Formation de carte">Formation de carte</option>
                                    <option value="Formations">Formation</option>
                                </select>
                            <p  class="mb-0" >Nom de la formation:</p>
                            <input class="form-control mb-3" type="text" placeholder="" style="width: 200px; height: 27px;" aria-label="default input example">
                            <p class="mb-0">Nom de l'enseignant:</p>
                            <input class="form-control mb-3" type="text" placeholder="" style="width: 200px; height: 27px;" aria-label="default input example">
                           
                            <p class="mb-0">Date et heure:</p>
                            <div  class="mb-2 col-9 row">
                                <div class="col">
                                    <label for="Select">Jours:</label>
                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                        <option selected>dimanche</option>
                                        <option value="lundi">lundi</option>
                                        <option value="mardi">mardi</option>
                                        <option value="mercredi">mercredi</option>
                                        <option value="jeudi">jeudi</option>
                                        <option value="vendredi">vendredi</option>
                                        <option value="samedi">samedi</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="heures">Heures:</label>
                                    <input type="text" style="height: 32px;" class="form-control" id="heures" placeholder="Heures">

                                </div>
                            </div>                            <div class="row d-flex" >
                                <div class="  row "> 
                                    <label for="inputField" class="mb-0">Prix de la Formation/ abonnement mensiuel:</label>

                                    <div  class="input-group mt-2">
                                        <input style="height: 30px; width: 70px;" type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                        <span style="color: gray; height: 30px;" class="input-group-text">DA</span>
                                        </div>

                                </div> 
                            
                            </div>                            </div>
                           
                            <div class="second-side   col-md" >  
                                <p  class=" mt-4 mb-0 ">Promotions:</p>
                                <button type="button " class="pb-1 pt-0 mt-1 mb-1 btn btn-outline-primary" style=" border-radius: 20px; height: 28px; justify-content: center; align-items: center;" disabled >
                                    <span style="font-size: 12px;">-50% Ramdan</span>
                            
                                    <svg xmlns="http://www.w3.org/2000/svg"  width="16" height="16" fill="currentColor"  class="bi bi-x" viewBox="0 0 16 16">
                                        <path  d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                    </svg>
                                </button>
                                <a href="./selectPromotion.html">                                   
                                    <button type="button" class="btn btn-primary pt-0 mt-0" style="height: 28px; color: white; border-radius: 20px; justify-content: center; align-items: center;">
                                    <span class="mt-0" style=" font-size: 12px;">Ajouter des Promotions</span> 
                                    </button>
                                </a>
                           <p class="mb-0 mt-4">Etudiants:</p>
                            <h1 class="fs-5">35 etudiants registrées</h1>
                            <button type="button"class="gerer-student btn btn-primary " style="color: white;" >voir les etudiants</button>

                        </div>
                            
                           
                            </div>
                             <div class="m-4 d-flex justify-content-end mw-100">
                                <button type="button" class="me-1 btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" color="white" width="16" height="16" fill="currentColor" class="mb-1 bi bi-trash3" viewBox="0 0 16 16">
                                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                                  </svg></button>
                                  <a href="./Cours.html">
                            <button type="button"class="submit-formation btn btn-primary " style="color: white;" >Confirmer</button>
                        </a>
                        </div>
                           
                        </div>
                
                    </div>
                </div>
            </div>

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
      <script src="darkmode.js"></script>
      <script src="script.js"></script>
      <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>