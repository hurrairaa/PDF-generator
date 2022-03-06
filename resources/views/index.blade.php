<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PDF</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="/css/style.css" rel="stylesheet">
 
    </head>
    <body>
        <div class="container">
            <form action="/generate-pdf" method="GET">
                <h2>Udfyld felterne nedenfor, for at generere ansøgning i PDF format. Vi gemmer ikke jeres oplysninger.</h2>
                <div class="from-group">
                    <label for="fname">Kommunens navn:</label>
                    <input type="text" id="fname" name="municipality_name" placeholder="F.eks. Aalborg Kommune" required>
                </div>
                <div class="form-group">
                    <label for="lname">Evt. Sagsbehandlers navn:</label>
                    <input type="text"  name="caseworker_name" placeholder="F.eks. Jens Jensen" required>
                </div>
                <div class="form-group">
                    <label for="lname">Kommunens adresse:</label>
                    <input type="text"  name="municipality_address" placeholder="F.eks. Boulevarden 13" required>
                </div>
                <div class="form-group">
                    <label for="lname">Kommunens Postnummer og by:</label>
                    <input type="text"  name="municipality_zipcode" placeholder="F.eks. 9000 Aalborg" required>
                </div>
                <p> Informationer om ansøger (dig):</p>

                <div class="form-group">
                    <label for="lname">Dit fulde navn:</label>
                    <input type="text"  name="full_name" required>
                </div>

                <div class="from-group">
                    <label for="lname">Dit CPR nummer:</label>
                    <input type="text"  name="cpr_number" placeholder="XXXXXX-XXXX" required>
                </div>
                <div class="form-group">
                    <label for="lname">Din adresse:</label>
                    <input type="text"  name="address" required>
                </div>
                <div class="form-group">
                    <label for="lname">Dit postnummer og by:</label>
                    <input type="text"  name="zipcode" required>
                </div>
                <p>
                    Udfyld KUN hvis ansøgningen handler om dig barn:
                </p>
                <div class="form-group">
                    <label for="lname">Dit barns fulde navn:</label>
                    <input type="text"  name="child_name" required>
                </div>
                <div class="form-group">
                    <label for="lname">Dit barns CPR nummer:</label>
                    <input type="text"  name="child_cpr" placeholder="XXXXXX-XXXX" required>
                </div>
            
                <div class="form-group">

                    <label for="cars">Vælg en kursus/rådgivning:</label>
                    <select name="cars" id="counceling" required>
                        <option value="1">Timerådgivning</option>
                        <option value="2">Forældrekursus 1</option>
                        <option value="3">Forældrekursus 2</option>
                    </select>

                </div>
            
            
                
                <label>Hvad forventer du at få ud af kurset/rådgivningen (Vælg kun de punkter som er relevante for dig)?</label>
                <div class="m-3">
                    <div class="form-group mp-1">
                        <input type="checkbox" id="check1" name="counseling1 ">
                        <label for="check1">At jeg som kursist skal lære at forstå min egen diagnose bedre</label>
                    </div>
                    
                    <div class="form-group mp-1">
                        <input type="checkbox" id="check2" name="counseling2 ">
                        <label for="check2">At lære nye mestringsstrategier, der gør mig bedre i stand til at leve en så normal hverdag som muligt</label>
                    </div>
                
                    <div class="form-group mp-1">
                        <input type="checkbox" id="check3" name="counseling3 ">
                        <label for="check3">At hindre at min diagnose gør, at min psykiske tilstand forværres, samt at forebygge en mere kaotisk hverdag</label>
                    </div>
                
                    <div class="form-group mp-1">
                        <input type="checkbox" id="check4" name="counseling4">
                        <label for="check4">At jeg bliver i stand til at holde sammen på min egen familie, og at min familie og jeg ikke får brug for støtte til flere merudgifter (LSS § 41 eller LSS§ 112)</label>
                    </div>
                </div>
                

                <div class="form-group">
                    <label for="lname">Skriv udelukkende selv eller tilføj andre forventninger til kurset/rådgivningen:</label>
                    <input type="text"  name="amount1" required>
                </div>                
            
                <div class="form-group">
                    <label for="lname">Transport i forbindelse med kurset? Angiv samlet antal km:</label>
                    <input type="text"  name="amount2" placeholder="f.eks. 254 km" required>
                </div>
                
                <div class="form-group">
                    <label for="lname">Evt. kompensation for tabt arbejdsfortjeneste (skriv beløb):</label>
                    <input type="text"  name="amount3" placeholder="f.eks. 500 kr" required>
                </div>
            
                <div class="form-group">
                    <label for="lname">Evt. pasning af barn/børn, der ikke skal med på kurset (skriv beløb):</label>
                    <input type="text"  name="amount4" placeholder="f.eks. 800 kr" required>
                </div>
                
                <div class="form-group">
                    <label for="lname">Skriv hvis du har andre diagnoser eller tilstande, som rådgiveren også gerne må tage med i sin betragtning:</label>
                    <input type="text"  name="amount5" placeholder="f.eks. jeg er" required>
                </div>
            
                <div class="m-3">
                    <label>Funktionsnedsættelse (Vælg kun de punkter som er relevante for dig):</label>
                    <div class="form-group mp-1">
                        <input type="checkbox" id="check5" name="disability1">
                        <label for="check5">Jeg har en psykisk funktionsnedsættelse i form af en opmærksomhedsforstyrrelsesdiagnose som ADD/ADHD</label>
                    </div>
                    
                    <div class="form-group mp-1">
                        <input type="checkbox" id="check6" name="disability2">
                        <label for="check6">Jeg har en psykisk funktionsnedsættelse i form af en autismespektrumdiagnose</label>
                    </div>
                
                    <div class="form-group mp-1">
                        <input type="checkbox" id="check7" name="disability3" >
                        <label for="check7">Jeg har en psykisk funktionsnedsættelse i form af angst</label>
                    </div>
                
                    <div class="form-group mp-1">
                        <input type="checkbox" id="check8" name="disability4" >
                        <label for="check8">Jeg har en psykisk funktionsnedsættelse i form af stress </label>
                    </div>
                
                    <div class="form-group mp-1">
                        <input type="checkbox" id="check9" name="disability5">
                        <label for="check9">Jeg har en psykisk funktionsnedsættelse i form af depression</label>
                    </div>
                </div>

            
                <button class="btn-primary">Download PDF</button>
            </form>
        </div>
    </body>
</html>
