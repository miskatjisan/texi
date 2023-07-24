<head>
  <title>Area Covered</title>
  <link rel="stylesheet" href="{{url('frontend/css/covered.css')}}">
</head>

@extends('frontend.layouts.main')

@section('main-container')



<div class="loader">
    <div></div>
</div>

<div class="content">

  <main class="area-main">

    <section class="mini-hero">
      <h1>Area Covered</h1>
    </section>

  </main>

<!-- header section ends -->



<!-- section-1 starts here -->

  <section class="section-1">
    <div class="area-content">
      <ul class="accordion">
        <li>
          <input type="radio" name="accordion" id="first" checked>
          <label for="first">Explore areas starting with ( A )</label>
          <div class="contents">
            <button type="button" onclick="location.href='/areas/anerley-taxis'">Anerley Taxis</button>
            <button type="button" onclick="location.href='/areas/ashtead-cabs'">Ashtead Cabs</button>
            <button type="button" onclick="location.href='/areas/abbey-wood-cabs'">Abbey Wood Cabs</button>
            <button type="button" onclick="location.href='/areas/aldgate-cabs'">Aldgate Cabs</button>
            <button type="button" onclick="location.href='/areas/action-cabs'">Action Cabs</button>
            <button type="button" onclick="location.href='/areas/alperton-taxis'">Alperton Taxis</button>
            <button type="button" onclick="location.href='/areas/apex-cornor-taxis'">Apex Cornor Taxis</button>
            <button type="button" onclick="location.href='/areas/archway-taxis'">Archway Taxis</button>
            <button type="button" onclick="location.href='/areas/arkley-taxis'">Arkley taxis</button>
            <button type="button" onclick="location.href='/areas/addleston-cabs'">Addleston Cabs</button>
            <button type="button" onclick="location.href='/areas/ashford-cabs'">Ashford Cabs</button>
            <button type="button" onclick="location.href='/areas/abbey-road-cabs'">Abbey Road Cabs</button>
            <button type="button" onclick="location.href='/areas/albany-park-cabs'">Albany Park Cabs</button>
            <button type="button" onclick="location.href='/areas/alexandra-palace-cabs'">Alexandra Palace Cabs</button>
            <button type="button" onclick="location.href='/areas/all-saints-cabs'">All Saints Cabs</button>
            <button type="button" onclick="location.href='/areas/amersham-cabs'">Amersham Cabs</button>
            <button type="button" onclick="location.href='/areas/angel-cabs'">Angel Cabs</button>
            <button type="button" onclick="location.href='/areas/arnos-grove-cabs'">Arnos Grove Cabs</button>
            <button type="button" onclick="location.href='/areas/arsenal-cabs'">Arsenal Cabs</button>
          </div>
        </li>
        <li>
          <input type="radio" name="accordion" id="second">
          <label for="second">Explore areas starting with ( B )</label>
          <div class="contents">
            <button type="button" onclick="location.href='/areas/botany-bay-taxis'">Botany Bay Taxis</button>
            <button type="button" onclick="location.href='/areas/balham-taxis'">Balham Taxis</button>
            <button type="button" onclick="location.href='/areas/banstead-taxis'">Banstead Taxis</button>
            <button type="button" onclick="location.href='/areas/brent-taxis'">Brent Taxis</button>
            <button type="button" onclick="location.href='/areas/brockley-taxis'">Brockley Taxis</button>
            <button type="button" onclick="location.href='/areas/barnet-taxis'">Barnet Taxis</button>
            <button type="button" onclick="location.href='/areas/beckenham-taxis'">Beckenham Taxis</button>
            <button type="button" onclick="location.href='/areas/belmont-taxis'">Belmont Taxis</button>
            <button type="button" onclick="location.href='/areas/berrylands-taxis'">Berrylands Taxis</button>
            <button type="button" onclick="location.href='/areas/brixton-taxis'">Brixton Taxis</button>
            <button type="button" onclick="location.href='/areas/barbican-cabs'">Barbican Cabs</button>
            <button type="button" onclick="location.href='/areas/barking-cabs'">Barking Cabs</button>
            <button type="button" onclick="location.href='/areas/barnes-taxis'">Barnes Taxis</button>
            <button type="button" onclick="location.href='/areas/battersea-cabs'">Battersea Cabs</button>
            <button type="button" onclick="location.href='/areas/bayswater-taxis'">Bayswater Taxis</button>
            <button type="button" onclick="location.href='/areas/borehamwood-cabs'">Borehamwood Cabs</button>
            <button type="button" onclick="location.href='/areas/bromley-taxis'">Bromley Taxis</button>
            <button type="button" onclick="location.href='/areas/beckton-taxis'">Beckton Taxis</button>
            <button type="button" onclick="location.href='/areas/belgravia-taxis'">Belgravia Taxis</button>
            <button type="button" onclick="location.href='/areas/bellingham-taxis'">Bellingham Taxis</button>
            <button type="button" onclick="location.href='/areas/belsize-park-cabs'">Belsize Park Cabs</button>
            <button type="button" onclick="location.href='/areas/bermondsey-cabs'">Bermondsey Taxis</button>
            <button type="button" onclick="location.href='/areas/brompton-taxis'">Brompton Taxis</button>
            <button type="button" onclick="location.href='/areas/brondesbury-park-cabs'">Brondesbury Park Cabs</button>
            <button type="button" onclick="location.href='/areas/burnt-oak-cabs'">Burnt Oak Cabs</button>
            <button type="button" onclick="location.href='/areas/bushey-taxis'">Bushey Taxis</button>
            <button type="button" onclick="location.href='/areas/brookmans-park-taxis'">Brookmans Park Taxis</button>
            <button type="button" onclick="location.href='/areas/bethnal-green-taxis'">Bethnal Green Taxis</button>
            <button type="button" onclick="location.href='/areas/bishopsgate-cabs'">Bishopsgate Cabs</button>
            <button type="button" onclick="location.href='/areas/blackfriars-cabs'">Blackfriars Cabs</button>
            <button type="button" onclick="location.href='/areas/beckheath-cabs'">Blackheath Taxis</button>
            <button type="button" onclick="location.href='/areas/bloomsbury-cabs'">Bloomsbury Cabs</button>
            <button type="button" onclick="location.href='/areas/borough-taxis'">Borough Taxis</button>
            <button type="button" onclick="location.href='/areas/bounds-green-cabs'">Bounds Green Cabs</button>
            <button type="button" onclick="location.href='/areas/bow-cabs'">Bow Cabs</button>
            <button type="button" onclick="location.href='/areas/buckhurst-hill-cabs'">Buckhurst Hill Cabs</button>
            <button type="button" onclick="location.href='/areas/baker-street-cabs'">Baker Street Cabs</button>
            <button type="button" onclick="location.href='/areas/barkingside-road-cabs'">Barkingside Cabs</button>
            <button type="button" onclick="location.href='/areas/barnehurst-cabs'">Barnehurst Cabs</button>
            <button type="button" onclick="location.href='/areas/barons-court-cabs'">Barons Court Cabs</button>
            <button type="button" onclick="location.href='/areas/becontree-cabs'">Becontree Cabs</button>
            <button type="button" onclick="location.href='/areas/belvedere-cabs'">Belvedere Cabs</button>
            <button type="button" onclick="location.href='/areas/bexley-cabs'">Bexley Cabs</button>
            <button type="button" onclick="location.href='/areas/bickley-cabs'">Bickley Cabs</button>
            <button type="button" onclick="location.href='/areas/birkbeck-cabs'">Birkbeck Cabs</button>
            <button type="button" onclick="location.href='/areas/blackhorse-road-cabs'">Blackhorse Road Cabs</button>
            <button type="button" onclick="location.href='/areas/bond-street-cabs'">Bond Street Cabs</button>
            <button type="button" onclick="location.href='/areas/boston-manor-cabs'">Boston Manor Cabs</button>
            <button type="button" onclick="location.href='/areas/bowes-park-cabs'">Bowes Park Cabs</button>
            <button type="button" onclick="location.href='/areas/brentford-cabs'">Brentford Cabs</button>
            <button type="button" onclick="location.href='/areas/brimsdown-cabs'">Brimsdown Cabs</button>
            <button type="button" onclick="location.href='/areas/bromley-by-bow-cabs'">Bromley By Bow Cabs</button>
            <button type="button" onclick="location.href='/areas/bruce-grove-cabs'">Bruce Grove Cabs</button>
            <button type="button" onclick="location.href='/areas/bush-hill-park-cabs'">Bush Hill Park Cabs</button>
          </div>
        </li>
        <li>
          <input type="radio" name="accordion" id="third">
          <label for="third">Explore areas starting with ( C )</label>
          <div class="contents">
            <button type="button" onclick="location.href='/areas/crews-hill-taxis'">Crews Hill Taxis</button>
            <button type="button" onclick="location.href='/areas/camden-taxis'">Camden Taxis</button>
            <button type="button" onclick="location.href='/areas/cranbrook-taxis'">Cranbrook Taxis</button>
            <button type="button" onclick="location.href='/areas/church-end-taxis'">Church End Taxis</button>
            <button type="button" onclick="location.href='/areas/chiswick-taxis'">Chiswick Taxis</button>
            <button type="button" onclick="location.href='/areas/chingford-taxis'">Chingford Taxis</button>
            <button type="button" onclick="location.href='/areas/charlton-taxis'">Charlton Taxis</button>
            <button type="button" onclick="location.href='/areas/castelnau-taxis'">Castelnau Taxis</button>
            <button type="button" onclick="location.href='/areas/chessington-cabs'">Chessington Taxis</button>
            <button type="button" onclick="location.href='/areas/carpenders-park-taxis'">Carpenders Park Taxis</button>
            <button type="button" onclick="location.href='/areas/canons-park-cabs'">Canons Park Cabs</button>
            <button type="button" onclick="location.href='/areas/canonbury-cabs'">Canonbury Cabs</button>
            <button type="button" onclick="location.href='/areas/caterham-cabs'">Caterham Cabs</button>
            <button type="button" onclick="location.href='/areas/chertsey-cabs'">Chertsey Cabs</button>
            <button type="button" onclick="location.href='/areas/chigwell-cabs'">Chigwell Cabs</button>
            <button type="button" onclick="location.href='/areas/chipstead-cabs'">Chipstead Cabs</button>
            <button type="button" onclick="location.href='/areas/cobham-cabs'">Cobham Cabs</button>
            <button type="button" onclick="location.href='/areas/croxley-cabs'">Croxley Cabs</button>
            <button type="button" onclick="location.href='/areas/canning-town-taxis'">Canning Town Taxis</button>
            <button type="button" onclick="location.href='/areas/cockfosters-taxis'">Cockfosters Taxis</button>
            <button type="button" onclick="location.href='/areas/crouch-end-taxis'">Crouch End Taxis</button>
            <button type="button" onclick="location.href='/areas/carshalton-taxis'">Carshalton Taxis</button>
            <button type="button" onclick="location.href='/areas/catford-taxis'">Catford Taxis</button>
            <button type="button" onclick="location.href='/areas/clapham-taxis'">Clapham Taxis</button>
            <button type="button" onclick="location.href='/areas/camberwell-taxis'">Camberwell Taxis</button>
            <button type="button" onclick="location.href='/areas/crofton-park-taxis'">Crofton Park Taxis</button>
            <button type="button" onclick="location.href='/areas/cricklewood-taxis'">Cricklewood Taxis</button>
            <button type="button" onclick="location.href='/areas/covent-garden-taxis'">Covent Garden Taxis</button>
            <button type="button" onclick="location.href='/areas/chelsea-taxis'">Chelsea Taxis</button>
            <button type="button" onclick="location.href='/areas/cheam-taxis'">Cheam Taxis</button>
            <button type="button" onclick="location.href='/areas/claygate-taxis'">Claygate Taxis</button>
            <button type="button" onclick="location.href='/areas/colliers-wood-taxis'">Colliers Wood Taxis</button>
            <button type="button" onclick="location.href='/areas/croydon-taxis'">Croydon Taxis</button>
            <button type="button" onclick="location.href='/areas/srystal-palace-taxis'">Crystal Palace Taxis</button>
            <button type="button" onclick="location.href='/areas/cottenham-park-taxis'">Cottenham Park Taxis</button>
            <button type="button" onclick="location.href='/areas/colindale-taxis'">Colindale Taxis</button>
            <button type="button" onclick="location.href='/areas/clerkenwell-taxis'">Clerkenwell Taxis</button>
            <button type="button" onclick="location.href='/areas/clapton-taxis'">Clapton Taxis</button>
            <button type="button" onclick="location.href='/areas/church-lane-taxis'">Church Lane Taxis</button>
            <button type="button" onclick="location.href='/areas/caledonian-road-cabs'">Caledonian Road Cabs</button>
            <button type="button" onclick="location.href='/areas/cambridge-heath-cabs'">Cambridge Heath Cabs</button>
            <button type="button" onclick="location.href='/areas/canada-water-cabs'">Canada Water Cabs</button>
            <button type="button" onclick="location.href='/areas/canary-wharf-cabs'">Canary Wharf Cabs</button>
            <button type="button" onclick="location.href='/areas/cannon-street-cabs'">Cannon Street Cabs</button>
            <button type="button" onclick="location.href='/areas/castle-bar-park-cabs'">Castle Bar Park Cabs</button>
            <button type="button" onclick="location.href='/areas/chalfont-and-latimar-cabs'">Chalfont And Latimer Cabs</button>
            <button type="button" onclick="location.href='/areas/chalkfarm-cabs'">Chalkfarm Cabs</button>
            <button type="button" onclick="location.href='/areas/chancery-alne-cabs'">Chancery Lane Cabs</button>
            <button type="button" onclick="location.href='/areas/chelsfield-cabs'">Chelsfield Cabs</button>
            <button type="button" onclick="location.href='/areas/chesham-cabs'">Chesham Cabs</button>
            <button type="button" onclick="location.href='/areas/chislehurst-cabs'">Chislehurst Cabs</button>
            <button type="button" onclick="location.href='/areas/chorleywood-cabs'">Chorleywood Cabs</button>
            <button type="button" onclick="location.href='/areas/city-thamslink-cabs'">City Thameslink Cabs</button>
            <button type="button" onclick="location.href='/areas/clockhouse-cabs'">Clockhouse Cabs</button>
            <button type="button" onclick="location.href='/areas/coulsdon-south-cabs'">Coulsdon South Cabs</button>
            <button type="button" onclick="location.href='/areas/crayford-cabs'">Crayford Cabs</button>
            <button type="button" onclick="location.href='/areas/crossharbour-dlr-cabs'">Crossharbour DLR Cabs</button>
          </div>
        </li>
        <li>
          <input type="radio" name="accordion" id="fourth">
          <label for="fourth">Explore areas starting with ( D )</label>
          <div class="contents">
            <button type="button" onclick="location.href='/areas/drayton-taxis'">Drayton Taxis</button>
            <button type="button" onclick="location.href='/areas/dollis-hill-taxis'">Dollis Hill Taxis</button>
            <button type="button" onclick="location.href='/areas/docklands-taxis'">Docklands Taxis</button>
            <button type="button" onclick="location.href='/areas/deptford-taxis'">Deptford Taxis</button>
            <button type="button" onclick="location.href='/areas/dulwich-taxis'">Dulwich Taxis</button>
            <button type="button" onclick="location.href='/areas/denham-taxis'">Denham Taxis</button>
            <button type="button" onclick="location.href='/areas/dalston-taxis'">Dalston Taxis</button>
            <button type="button" onclick="location.href='/areas/debden-cabs'">Debden Cabs</button>
            <button type="button" onclick="location.href='/areas/dagenham-cabs'">Dagenham Cabs</button>
            <button type="button" onclick="location.href='/areas/dartford-cabs'">Dartford Cabs</button>
            <button type="button" onclick="location.href='/areas/denmark-hill-cabs'">Denmark Hill Cabs</button>
            <button type="button" onclick="location.href='/areas/devons-road-cabs'">Devons Road Cabs</button>
            <button type="button" onclick="location.href='/areas/drayton-green-cabs'">Drayton Green Cabs</button>
            <button type="button" onclick="location.href='/areas/drayton-park-cabs'">Drayton Park Cabs</button>
          </div>
        </li>
        <li>
          <input type="radio" name="accordion" id="fifth">
          <label for="fifth">Explore areas starting with ( E )</label>
          <div class="contents">
            <button type="button" onclick="location.href='/areas/epsom-taxis'">Epsom Taxis</button>
            <button type="button" onclick="location.href='/areas/esher-taxis'">Esher Taxis</button>
            <button type="button" onclick="location.href='/areas/enfield-taxis'">Enfield Taxis</button>
            <button type="button" onclick="location.href='/areas/earlsfield-taxis'">Earlsfield Taxis</button>
            <button type="button" onclick="location.href='/areas/ewall-taxis'">Ewell Taxis</button>
            <button type="button" onclick="location.href='/areas/ealing-taxis'">Ealing Taxis</button>
            <button type="button" onclick="location.href='/areas/eltham-taxis'">Eltham Taxis</button>
            <button type="button" onclick="location.href='/areas/eastcote-taxis'">Eastcote Taxis</button>
            <button type="button" onclick="location.href='/areas/elstree-taxis'">Elstree Taxis</button>
            <button type="button" onclick="location.href='/areas/edgware-taxis'">Edgware Taxis</button>
            <button type="button" onclick="location.href='/areas/earls-court-taxis'">Earls Court Taxis</button>
            <button type="button" onclick="location.href='/areas/eden-park-cabs'">Eden Park Cabs</button>
            <button type="button" onclick="location.href='/areas/edgware-road-cabs'">Edgware Road Cabs</button>
            <button type="button" onclick="location.href='/areas/edmonton-cabs'">Edmonton Cabs</button>
            <button type="button" onclick="location.href='/areas/elephant-&-castle-cabs'">Elephant & Castle Cabs</button>
            <button type="button" onclick="location.href='/areas/elmers-end-cabs'">Elmers End Cabs</button>
            <button type="button" onclick="location.href='/areas/elm-park-cabs'">Elm Park Cabs</button>
            <button type="button" onclick="location.href='/areas/elmstead-woods-cabs'">Elmstead Woods Cabs</button>
            <button type="button" onclick="location.href='/areas/elverson-road-cabs'">Elverson Road Cabs</button>
            <button type="button" onclick="location.href='/areas/embankment-cabs'">Embankment Cabs</button>
            <button type="button" onclick="location.href='/areas/emerson-aprk-cabs'">Emerson Park Cabs</button>
            <button type="button" onclick="location.href='/areas/epping-cabs'">Epping Cabs</button>
            <button type="button" onclick="location.href='/areas/erith-cabs'">Erith Cabs</button>
            <button type="button" onclick="location.href='/areas/essex-road-cabs'">Essex Road Cabs</button>
            <button type="button" onclick="location.href='/areas/norbiton-taxis'">Norbiton Taxis</button>
          </div>
        </li>
        <li>
          <input type="radio" name="accordion" id="sixth">
          <label for="sixth">Explore areas starting with ( F )</label>
          <div class="contents">
            <button type="button" onclick="location.href='/areas/feltham-taxis'">Feltham Taxis</button>
            <button type="button" onclick="location.href='/areas/finchley-taxis'">Finchley Taxis</button>
            <button type="button" onclick="location.href='/areas/forest-hill-taxis'">Forest Hill Taxis</button>
            <button type="button" onclick="location.href='/areas/fleet-street-cabs'">Fleet Street Cabs</button>
            <button type="button" onclick="location.href='/areas/forest-gate-cabs'">Forest Gate Cabs</button>
            <button type="button" onclick="location.href='/areas/fortis-green-cabs'">Fortis Green Cabs</button>
            <button type="button" onclick="location.href='/areas/fulham-cabs'">Fulham Cabs</button>
            <button type="button" onclick="location.href='/areas/fenchurch-street-cabs'">Fenchurch Street Cabs</button>
            <button type="button" onclick="location.href='/areas/finsbury-cabs'">Finsbury Cabs</button>
            <button type="button" onclick="location.href='/areas/fairlop-cabs'">Fairlop Cabs</button>
            <button type="button" onclick="location.href='/areas/falconwood-cabs'">Falconwood Cabs</button>
            <button type="button" onclick="location.href='/areas/farringdon-cabs'">Farringdon Cabs</button>
            <button type="button" onclick="location.href='/areas/fulwell-cabs'">Fulwell Cabs</button>
          </div>
        </li>
        <li>
          <input type="radio" name="accordion" id="seventh">
          <label for="seventh">Explore areas starting with ( G )</label>
          <div class="contents">
            <button type="button" onclick="location.href='/areas/gipsy-hill-taxis'">Gipsy Hill Taxis</button>
            <button type="button" onclick="location.href='/areas/greenwich-taxis'">Greenwich Taxis</button>
            <button type="button" onclick="location.href='/areas/golders-green-cabs'">Golders Green Cabs</button>
            <button type="button" onclick="location.href='/areas/grange-park-cabs'">Grange Park Cabs</button>
            <button type="button" onclick="location.href='/areas/grays-inn-cabs'">Grays Inn Cabs</button>
            <button type="button" onclick="location.href='/areas/greenford-cabs'">Greenford Cabs</button>
            <button type="button" onclick="location.href='/areas/grove-park-cabs'">Grove Park Cabs</button>
            <button type="button" onclick="location.href='/areas/gallions-reach-cabs'">Gallions Reach Cabs</button>
            <button type="button" onclick="location.href='/areas/gants-hill-cabs'">Gants Hill Cabs</button>
            <button type="button" onclick="location.href='/areas/gidea-park-cabs'">Gidea Park Cabs</button>
            <button type="button" onclick="location.href='/areas/gloucester-road-cabs'">Gloucester Road Cabs</button>
            <button type="button" onclick="location.href='/areas/goldhawk-road-cabs'">Goldhawk Road Cabs</button>
            <button type="button" onclick="location.href='/areas/goodle-street-cabs'">Goodge Street Cabs</button>
            <button type="button" onclick="location.href='/areas/goodmayes-cabs'">Goodmayes Cabs</button>
            <button type="button" onclick="location.href='/areas/gordon-hill-cabs'">Gordon Hill Cabs</button>
            <button type="button" onclick="location.href='/areas/gospel-oak-cabs'">Gospel Oak Cabs</button>
            <button type="button" onclick="location.href='/areas/great-portland-street-cabs'">Great Portland Street Cabs</button>
            <button type="button" onclick="location.href='/areas/greenpark-cabs'">Green Park Cabs</button>
            <button type="button" onclick="location.href='/areas/gunnersbury-cabs'">Gunnersbury Cabs</button>
          </div>
        </li>
        <li>
          <input type="radio" name="accordion" id="eighth">
          <label for="eighth">Explore areas starting with ( H )</label>
          <div class="contents">
            <button type="button" onclick="location.href='/areas/homsey-cabs'">Homsey Cabs</button>
            <button type="button" onclick="location.href='/areas/honor-oak-cabs'">Honor Oak Cabs</button>
            <button type="button" onclick="location.href='/areas/hoxton-cabs'">Hoxton Cabs</button>
            <button type="button" onclick="location.href='/areas/hyde-park-cabs'">Hyde Park Cabs</button>
            <button type="button" onclick="location.href='/areas/hampton-taxis'">Hampton Taxis</button>
            <button type="button" onclick="location.href='/areas/hanworth-taxis'">Hanworth Taxis</button>
            <button type="button" onclick="location.href='/areas/hackney-taxis'">Hackney Taxis</button>
            <button type="button" onclick="location.href='/areas/hamersmith-taxis'">Hammersmith Taxis</button>
            <button type="button" onclick="location.href='/areas/haringey-taxis'">Haringey Taxis</button>
            <button type="button" onclick="location.href='/areas/harrow-taxis'">Harrow Taxis</button>
            <button type="button" onclick="location.href='/areas/havering-taxis'">Havering Taxis</button>
            <button type="button" onclick="location.href='/areas/herne-hill-taxis'">Herne Hill Taxis</button>
            <button type="button" onclick="location.href='/areas/hook-taxis'">Hook Taxis</button>
            <button type="button" onclick="location.href='/areas/hounslow-taxis'">Hounslow Taxis</button>
            <button type="button" onclick="location.href='/areas/hornsey-taxis'">Hornsey Taxis</button>
            <button type="button" onclick="location.href='/areas/hillingdon-taxis'">Hillingdon Taxis</button>
            <button type="button" onclick="location.href='/areas/hadley-wood-taxis'">Hadley Wood Taxis</button>
            <button type="button" onclick="location.href='/areas/ham-taxis'">Ham Taxis</button>
            <button type="button" onclick="location.href='/areas/hatfield-cabs'">Hatfield Cabs</button>
            <button type="button" onclick="location.href='/areas/hayes-cabs'">Hayes Cabs</button>
            <button type="button" onclick="location.href='/areas/headstone-lane-cabs'">Headstone Lane Cabs</button>
            <button type="button" onclick="location.href='/areas/hemel-hempstead-cabs'">Hemel Hempstead Cabs</button>
            <button type="button" onclick="location.href='/areas/hendon-cabs'">Hendon Cabs</button>
            <button type="button" onclick="location.href='/areas/hertford-cabs'">Hertford Cabs</button>
            <button type="button" onclick="location.href='/areas/highams-park-cabs'">Highams Park Cabs</button>
            <button type="button" onclick="location.href='/areas/highbury-cabs'">Highbury Cabs</button>
            <button type="button" onclick="location.href='/areas/highgate-cabs'">Highgate Cabs</button>
            <button type="button" onclick="location.href='/areas/hitchin-cabs'">Hitchin Cabs</button>
            <button type="button" onclick="location.href='/areas/hither-green-cabs'">Hither Green Cabs</button>
            <button type="button" onclick="location.href='/areas/holborn-cabs'">Holborn Cabs</button>
            <button type="button" onclick="location.href='/areas/holland-park-cabs'">Holland Park Cabs</button>
            <button type="button" onclick="location.href='/areas/holloway-cabs'">Holloway Cabs</button>
            <button type="button" onclick="location.href='/areas/homerton-cabs'">Homerton Cabs</button>
            <button type="button" onclick="location.href='/areas/hampstead-cabs'">Hampstead Cabs</button>
            <button type="button" onclick="location.href='/areas/hanwell-cabs'">Hanwell Cabs</button>
            <button type="button" onclick="location.href='/areas/harlesden-cabs'">Harlesden Cabs</button>
            <button type="button" onclick="location.href='/areas/harpenden-cabs'">Harpenden Cabs</button>
            <button type="button" onclick="location.href='/areas/harringay-cabs'">Harringay Cabs</button>
            <button type="button" onclick="location.href='/areas/hatch-end-cabs'">Hatch End Cabs</button>
            <button type="button" onclick="location.href='/areas/hersham-cabs'">Hersham Cabs</button>
            <button type="button" onclick="location.href='/areas/hinchley-wood-cabs'">Hinchley Wood Cabs</button>
            <button type="button" onclick="location.href='/areas/hackbridge-cabs'">Hackbridge Cabs</button>
            <button type="button" onclick="location.href='/areas/hainault-cabs'">Hainault Cabs</button>
            <button type="button" onclick="location.href='/areas/hanger-lane-cabs'">Hanger Lane Cabs</button>
            <button type="button" onclick="location.href='/areas/harold-wood-cabs'">Harold Wood Cabs</button>
            <button type="button" onclick="location.href='/areas/hatton-cross-cabs'">Hatton Cross Cabs</button>
            <button type="button" onclick="location.href='/areas/haydons-road-cabs'">Haydons Road Cabs</button>
            <button type="button" onclick="location.href='/areas/heathrow-terminal-1-cabs'">Heathrow Terminal 1 Cabs</button>
            <button type="button" onclick="location.href='/areas/heathrow-terminal-2-cabs'">Heathrow Terminal 2 Cabs</button>
            <button type="button" onclick="location.href='/areas/heathrow-terminal-3-cabs'">Heathrow Terminal 3 Cabs</button>
            <button type="button" onclick="location.href='/areas/heathrow-terminal-4-cabs'">Heathrow Terminal 4 Cabs</button>
            <button type="button" onclick="location.href='/areas/heathrow-terminal-5-cabs'">Heathrow Terminal 5 Cabs</button>
            <button type="button" onclick="location.href='/areas/hornchurch-cabs'">Hornchurch Cabs</button>
          </div>
        </li>
        <li>
          <input type="radio" name="accordion" id="ninth">
          <label for="ninth">Explore areas starting with ( I )</label>
          <div class="contents">
            <button type="button" onclick="location.href='/areas/ickenham-cabs'">Ickenham Cabs</button>
            <button type="button" onclick="location.href='/areas/isle-of-dogs-cabs'">Isle Of Dogs Cabs</button>
            <button type="button" onclick="location.href='/areas/islington-taxis'">Islington Taxis</button>
            <button type="button" onclick="location.href='/areas/ilford-cabs'">Ilford Cabs</button>
            <button type="button" onclick="location.href='/areas/island-gerdens-cabs'">Island Gardens Cabs</button>
            <button type="button" onclick="location.href='/areas/isleworth-cabs'">Isleworth Cabs</button>
          </div>
        </li>
        <li>
          <input type="radio" name="accordion" id="tenth">
          <label for="tenth">Explore areas starting with ( K )</label>
          <div class="contents">
            <button type="button" onclick="location.href='/areas/kenington-cabs'">Kennington Cabs</button>
            <button type="button" onclick="location.href='/areas/kensal-rise-cabs'">Kensal Rise Cabs</button>
            <button type="button" onclick="location.href='/areas/kentish-town-cabs'">Kentish Town Cabs</button>
            <button type="button" onclick="location.href='/areas/kenton-cabs'">Kenton Cabs</button>
            <button type="button" onclick="location.href='/areas/kidbrooke-cabs'">Kidbrooke Cabs</button>
            <button type="button" onclick="location.href='/areas/kilburn-cabs'">Kilburn Cabs</button>
            <button type="button" onclick="location.href='/areas/kingsbury-cabs'">Kingsbury Cabs</button>
            <button type="button" onclick="location.href='/areas/kingswood-cabs'">Kingswood Cabs</button>
            <button type="button" onclick="location.href='/areas/knebworth-cabs'">Knebworth Cabs</button>
            <button type="button" onclick="location.href='/areas/knightsbridge-cabs'">Knightsbridge Cabs</button>
            <button type="button" onclick="location.href='/areas/kensington-taxis'">Kensington Taxis</button>
            <button type="button" onclick="location.href='/areas/kingston-taxis'">Kingston Taxis</button>
            <button type="button" onclick="location.href='/areas/kempton-park-cabs'">Kempton Park Cabs</button>
            <button type="button" onclick="location.href='/areas/kenley-cabs'">Kenley Cabs</button>
            <button type="button" onclick="location.href='/areas/kent-house-cabs'">Kent House Cabs</button>
            <button type="button" onclick="location.href='/areas/kew-bridge-cabs'">Kew Bridge Cabs</button>
            <button type="button" onclick="location.href='/areas/knockholt-cabs'">Knockholt Cabs</button>
          </div>
        </li>
        <li>
          <input type="radio" name="accordion" id="11th">
          <label for="11th">Explore areas starting with ( L )</label>
          <div class="contents">
            <button type="button" onclick="location.href='/areas/ladbroke-grove-cabs'">Ladbroke Grove Cabs</button>
            <button type="button" onclick="location.href='/areas/lee-cabs'">Lee Cabs</button>
            <button type="button" onclick="location.href='/areas/letchworth-cabs'">Letchworth Cabs</button>
            <button type="button" onclick="location.href='/areas/leytonstone-cabs'">Leytonstone Cabs</button>
            <button type="button" onclick="location.href='/areas/liverpool-street-cabs'">Liverpool Street Cabs</button>
            <button type="button" onclick="location.href='/areas/longford-cabs'">Longford Cabs</button>
            <button type="button" onclick="location.href='/areas/letchmore-heath-taxis'">Letchmore Heath Taxis</button>
            <button type="button" onclick="location.href='/areas/lewisham-taxis'">Lewisham Taxis</button>
            <button type="button" onclick="location.href='/areas/lambeth-taxis'">Lambeth Taxis</button>
            <button type="button" onclick="location.href='/areas/london-colney-taxis'">London Colney Taxis</button>
            <button type="button" onclick="location.href='/areas/long-ditton-taxis'">Long Ditton Taxis</button>
            <button type="button" onclick="location.href='/areas/leatherhead-cabs'">Leatherhead Cabs</button>
            <button type="button" onclick="location.href='/areas/lougton-cabs'">Loughton Cabs</button>
            <button type="button" onclick="location.href='/areas/ladywell-cabs'">Ladywell Cabs</button>
            <button type="button" onclick="location.href='/areas/langdon-park-cabs'">Langdon Park Cabs</button>
            <button type="button" onclick="location.href='/areas/latimer-road-cabs'">Latimer Road Cabs</button>
            <button type="button" onclick="location.href='/areas/leicester-square-cabs'">Leicester Square Cabs</button>
            <button type="button" onclick="location.href='/areas/leyton-cabs'">Leyton Cabs</button>
            <button type="button" onclick="location.href='/areas/limehouse-cabs'">Limehouse Cabs</button>
            <button type="button" onclick="location.href='/areas/london-fields-cabs'">London Fields Cabs</button>
            <button type="button" onclick="location.href='/areas/loughborough-junction-cabs'">Loughborough Junction Cabs</button>
          </div>
        </li>
        <li>
          <input type="radio" name="accordion" id="12th">
          <label for="12th">Explore areas starting with ( M )</label>
          <div class="contents">
            <button type="button" onclick="location.href='/areas/maida-hill-cabs'">Maida Hill Cabs</button>
            <button type="button" onclick="location.href='/areas/manor-house-cabs'">Manor House Cabs</button>
            <button type="button" onclick="location.href='/areas/manor-park-cabs'">Manor Park Cabs</button>
            <button type="button" onclick="location.href='/areas/mayfair-cabs'">Mayfair Cabs</button>
            <button type="button" onclick="location.href='/areas/mile-end-cabs'">Mile End Cabs</button>
            <button type="button" onclick="location.href='/areas/millwall-cabs'">Millwall Cabs</button>
            <button type="button" onclick="location.href='/areas/monks-park-cabs'">Monks Park Cabs</button>
            <button type="button" onclick="location.href='/areas/monument-cabs'">Monument Cabs</button>
            <button type="button" onclick="location.href='/areas/moorgate-cabs'">Moorgate Cabs</button>
            <button type="button" onclick="location.href='/areas/moorpark-cabs'">Moorpark Cabs</button>
            <button type="button" onclick="location.href='/areas/mortlake-cabs'">Mortlake Cabs</button>
            <button type="button" onclick="location.href='/areas/mottingham-cabs'">Mottingham Cabs</button>
            <button type="button" onclick="location.href='/areas/mill-hill-taxis'">Mill Hill Taxis</button>
            <button type="button" onclick="location.href='/areas/morden-taxis'">Morden Taxis</button>
            <button type="button" onclick="location.href='/areas/monken-hadley-taxis'">Monken Hadley Taxis</button>
            <button type="button" onclick="location.href='/areas/muswell-hill-taxis'">Muswell Hill Taxis</button>
            <button type="button" onclick="location.href='/areas/motspur-park-taxis'">Motspur Park Taxis</button>
            <button type="button" onclick="location.href='/areas/merton-taxis'">Merton Taxis</button>
            <button type="button" onclick="location.href='/areas/malden-manor-taxis'">Malden Manor Taxis</button>
            <button type="button" onclick="location.href='/areas/mitcham-taxis'">Mitcham Taxis</button>
            <button type="button" onclick="location.href='/areas/molesey-taxis'">Molesey Taxis</button>
            <button type="button" onclick="location.href='/areas/mansion-house-cabs'">Mansion House Cabs</button>
            <button type="button" onclick="location.href='/areas/marble-arch-cabs'">Marble Arch Cabs</button>
            <button type="button" onclick="location.href='/areas/maryland-cabs'">Maryland Cabs</button>
            <button type="button" onclick="location.href='/areas/marylebone-cabs'">Marylebone Cabs</button>
            <button type="button" onclick="location.href='/areas/maze-hill-cabs'">Maze Hill Cabs</button>
            <button type="button" onclick="location.href='/areas/mornington-crescent-cabs'">Mornington Crescent Cabs</button>
          </div>
        </li>
        <li>
          <input type="radio" name="accordion" id="13th">
          <label for="13th">Explore areas starting with ( N )</label>
          <div class="contents">
            <button type="button" onclick="location.href='/areas/northolt-cabs'">Northolt Cabs</button>
            <button type="button" onclick="location.href='/areas/northwick-park-cabs'">Northwick Park Cabs</button>
            <button type="button" onclick="location.href='/areas/northwood-cabs'">Northwood Cabs</button>
            <button type="button" onclick="location.href='/areas/norbiton-taxis'">Norbiton Taxis</button>
            <button type="button" onclick="location.href='/areas/notting-hill-cabs'">Notting Hill Cabs</button>
            <button type="button" onclick="location.href='/areas/nunhead-cabs'">Nunhead Cabs</button>
            <button type="button" onclick="location.href='/areas/neasden-cabs'">Neasden Cabs</button>
            <button type="button" onclick="location.href='/areas/new-cross-cabs'">New Cross Cabs</button>
            <button type="button" onclick="location.href='/areas/newington-cabs'">Newington Cabs</button>
            <button type="button" onclick="location.href='/areas/nine-elms-cabs'">Nine Elms Cabs</button>
            <button type="button" onclick="location.href='/areas/new-malden-taxis'">New Malden Taxis</button>
            <button type="button" onclick="location.href='/areas/norwood-taxis'">Norwood Taxis</button>
            <button type="button" onclick="location.href='/areas/northaw-taxis'">Northaw Taxis</button>
            <button type="button" onclick="location.href='/areas/norbury-taxis'">Norbury Taxis</button>
            <button type="button" onclick="location.href='/areas/newham-taxis'">Newham Taxis</button>
            <button type="button" onclick="location.href='/areas/newbury-park-cabs'">Newbury Park Cabs</button>
            <button type="button" onclick="location.href='/areas/north-fields-cabs'">North Fields Cabs</button>
            <button type="button" onclick="location.href='/areas/north-sheen-cabs'">North Sheen Cabs</button>
            <button type="button" onclick="location.href='/areas/orthumberland-park-cabs'">Northumberland Park Cabs</button>
          </div>
        </li>
        <li>
          <input type="radio" name="accordion" id="14th">
          <label for="14th">Explore areas starting with ( O )</label>
          <div class="contents">
            <button type="button" onclick="location.href='/areas/orpington-taxis'">Orpington Taxis</button>
            <button type="button" onclick="location.href='/areas/oakwood-taxis'">Oakwood Taxis</button>
            <button type="button" onclick="location.href='/areas/oakleight-park-taxis'">Oakleigh Park Taxis</button>
            <button type="button" onclick="location.href='/areas/oxshott-cabs'">Oxshott Cabs</button>
            <button type="button" onclick="location.href='/areas/old-street-cabs'">Old Street Cabs</button>
            <button type="button" onclick="location.href='/areas/osterley-cabs'">Osterley Cabs</button>
            <button type="button" onclick="location.href='/areas/oval-cabs'">Oval Cabs</button>
            <button type="button" onclick="location.href='/areas/oxford-circus-cabs'">Oxford Circus Cabs</button>
            <button type="button" onclick="location.href='/areas/old-kent-road-cabs'">Old Kent Road Cabs</button>
          </div>
        </li>
        <li>
          <input type="radio" name="accordion" id="15th">
          <label for="15th">Explore areas starting with ( P )</label>
          <div class="contents">
            <button type="button" onclick="location.href='/areas/parsons-green-cabs'">Parsons Green Cabs</button>
            <button type="button" onclick="location.href='/areas/peckham-cabs'">Peckham Cabs</button>
            <button type="button" onclick="location.href='/areas/perivale-cabs'">Perivale Cabs</button>
            <button type="button" onclick="location.href='/areas/pimlico-cabs'">Pimlico Cabs</button>
            <button type="button" onclick="location.href='/areas/pinner-cabs'">Pinner Cabs</button>
            <button type="button" onclick="location.href='/areas/plaistow-cabs'">Plaistow Cabs</button>
            <button type="button" onclick="location.href='/areas/plumstead-cabs'">Plumstead Cabs</button>
            <button type="button" onclick="location.href='/areas/poplar-cabs'">Poplar Cabs</button>
            <button type="button" onclick="location.href='/areas/preston-road-cabs'">Preston Road Cabs</button>
            <button type="button" onclick="location.href='/areas/penge-taxis'">Penge Taxis</button>
            <button type="button" onclick="location.href='/areas/putney-taxis'">Putney Taxis</button>
            <button type="button" onclick="location.href='/areas/palmers-green-taxis'">Palmers Green Taxis</button>
            <button type="button" onclick="location.href='/areas/purley-taxis'">Purley Taxis</button>
            <button type="button" onclick="location.href='/areas/potters-end-taxis'">Potters End Taxis</button>
            <button type="button" onclick="location.href='/areas/park-royal-cabs'">Park Royal Cabs</button>
            <button type="button" onclick="location.href='/areas/peckham-rye-cabs'">Peckham Rye Cabs</button>
            <button type="button" onclick="location.href='/areas/petts-wood-cabs'">Petts Wood Cabs</button>
            <button type="button" onclick="location.href='/areas/piccadilly-circus-cabs'">Piccadilly Circus Cabs</button>
            <button type="button" onclick="location.href='/areas/pontoon-dock-cabs'">Pontoon Dock Cabs</button>
            <button type="button" onclick="location.href='/areas/prince-regent-cabs'">Prince Regent Cabs</button>
            <button type="button" onclick="location.href='/areas/pudding-mill-lane-cabs'">Pudding Mill Lane Cabs</button>
          </div>
        </li>
        <li>
          <input type="radio" name="accordion" id="16th">
          <label for="16th">Explore areas starting with ( Q )</label>
          <div class="contents">
            <button type="button" onclick="location.href='/areas/queensbury-cabs'">Queensbury Cabs</button>
            <button type="button" onclick="location.href='/areas/queens-park-cabs'">Queens Park Cabs</button>
            <button type="button" onclick="location.href='/areas/queens-road-peckham-cabs'">Queens Road Peckham Cabs</button>
            <button type="button" onclick="location.href='/areas/queenstown-road-cabs'">Queenstown Road Cabs</button>
            <button type="button" onclick="location.href='/areas/queensway-cabs'">Queensway Cabs</button>
          </div>
        </li>
        <li>
          <input type="radio" name="accordion" id="17th">
          <label for="17th">Explore areas starting with ( R )</label>
          <div class="contents">
            <button type="button" onclick="location.href='/areas/rayners-lane-cabs'">Rayners Lane Cabs</button>
            <button type="button" onclick="location.href='/areas/regents-park-cabs'">Regents Park Cabs</button>
            <button type="button" onclick="location.href='/areas/rose-hill-cabs'">Rose Hill Cabs</button>
            <button type="button" onclick="location.href='/areas/rotherhithe-cabs'">Rotherhithe Cabs</button>
            <button type="button" onclick="location.href='/areas/ruislip-cabs'">Ruislip Cabs</button>
            <button type="button" onclick="location.href='/areas/redbridge-taxis'">Redbridge Taxis</button>
            <button type="button" onclick="location.href='/areas/radlett-taxis'">Radlett Taxis</button>
            <button type="button" onclick="location.href='/areas/richmond-taxis'">Richmond Taxis</button>
            <button type="button" onclick="location.href='/areas/roehampton-taxis'">Roehampton Taxis</button>
            <button type="button" onclick="location.href='/areas/raynes-park-taxis'">Raynes Park Taxis</button>
            <button type="button" onclick="location.href='/areas/rickmansworth-cabs'">Rickmansworth Cabs</button>
            <button type="button" onclick="location.href='/areas/roding-valley-cabs'">Roding Valley Cabs</button>
            <button type="button" onclick="location.href='/areas/rinham-cabs'">Rainham Cabs</button>
            <button type="button" onclick="location.href='/areas/ravensbourne-caabs'">Ravensbourne Cabs</button>
            <button type="button" onclick="location.href='/areas/ravenscourt-park-cabs'">Ravenscourt Park Cabs</button>
            <button type="button" onclick="location.href='/areas/rectory-road-cabs'">Rectory Road Cabs</button>
            <button type="button" onclick="location.href='/areas/reedham-cabs'">Reedham Cabs</button>
            <button type="button" onclick="location.href='/areas/riddlesdown-cabs'">Riddlesdown Cabs</button>
            <button type="button" onclick="location.href='/areas/ramford-cabs'">Romford Cabs</button>
            <button type="button" onclick="location.href='/areas/royal-albert-cabs'">Royal Albert Cabs</button>
            <button type="button" onclick="location.href='/areas/royal-oak-cabs'">Royal Oak Cabs</button>
            <button type="button" onclick="location.href='/areas/russel-square-cabs'">Russell Square Cabs</button>
          </div>
        </li>
        <li>
          <input type="radio" name="accordion" id="18th">
          <label for="18th">Explore areas starting with ( S )</label>
          <div class="contents">
            <button type="button" onclick="location.href='/areas/sadbury-cabs'">Sudbury Cabs</button>
            <button type="button" onclick="location.href='/areas/surrey-docks-cabs'">Surrey Docks Cabs</button>
            <button type="button" onclick="location.href='/areas/swiss-cottage-cabs'">Swiss Cottage Cabs</button>
            <button type="button" onclick="location.href='/areas/seven-sisters-cabs'">Seven Sisters Cabs</button>
            <button type="button" onclick="location.href='/areas/sherherds-bush-cabs'">Shepherds Bush Cabs</button>
            <button type="button" onclick="location.href='/areas/shoreditch-cabs'">Shoreditch Cabs</button>
            <button type="button" onclick="location.href='/areas/soho-cabs'">Soho Cabs</button>
            <button type="button" onclick="location.href='/areas/southall-cabs'">Southall Cabs</button>
            <button type="button" onclick="location.href='/areas/stanmore-cabs'">Stanmore Cabs</button>
            <button type="button" onclick="location.href='/areas/staples-corner-cabs'">Staples Corner Cabs</button>
            <button type="button" onclick="location.href='/areas/stepney-cabs'">Stepney Cabs</button>
            <button type="button" onclick="location.href='/areas/stevenage-cabs'">Stevenage Cabs</button>
            <button type="button" onclick="location.href='/areas/st-johns-wood-cabs'">St Johns Wood Cabs</button>
            <button type="button" onclick="location.href='/areas/stockwell-cabs'">Stockwell Cabs</button>
            <button type="button" onclick="location.href='/areas/stoke-cabs'">Stoke Cabs</button>
            <button type="button" onclick="location.href='/areas/st-pancras-cabs'">St Pancras Cabs</button>
            <button type="button" onclick="location.href='/areas/st-pauls-cabs'">St Pauls Cabs</button>
            <button type="button" onclick="location.href='/areas/strand-cabs'">Strand Cabs</button>
            <button type="button" onclick="location.href='/areas/stratford-cabs'">Stratford Cabs</button>
            <button type="button" onclick="location.href='/areas/southgate-taxis'">Southgate Taxis</button>
            <button type="button" onclick="location.href='/areas/surrey-taxis'">Surrey Taxis</button>
            <button type="button" onclick="location.href='/areas/south-mimms-taxis'">South Mimms Taxis</button>
            <button type="button" onclick="location.href='/areas/shenley-taxis'">Shenley Taxis</button>
            <button type="button" onclick="location.href='/areas/sutton-taxis'">Sutton Taxis</button>
            <button type="button" onclick="location.href='/areas/surbiton-taxis'">Surbiton Taxis</button>
            <button type="button" onclick="location.href='/areas/selhurst-park-taxis'">Selhurst Park Taxis</button>
            <button type="button" onclick="location.href='/areas/southwark-taxis'">Southwark Taxis</button>
            <button type="button" onclick="location.href='/areas/stoneleigh-taxis'">Stoneleigh Taxis</button>
            <button type="button" onclick="location.href='/areas/scratchwood-taxis'">Scratchwood Taxis</button>
            <button type="button" onclick="location.href='/areas/st-albans-taxis'">St Albans Taxis</button>
            <button type="button" onclick="location.href='/areas/streatham-taxis'">Streatham Taxis</button>
            <button type="button" onclick="location.href='/areas/sydenham-taxis'">Sydenham Taxis</button>
            <button type="button" onclick="location.href='/areas/shepperton-cabs'">Shepperton Cabs</button>
            <button type="button" onclick="location.href='/areas/staines-cabs'">Staines Cabs</button>
            <button type="button" onclick="location.href='/areas/st-jamess-park-cabs'">St Jamess Park Cabs</button>
            <button type="button" onclick="location.href='/areas/st-helier-cabs'">St Helier Cabs</button>
            <button type="button" onclick="location.href='/areas/st-james-street-cabs'">St James Street Cabs</button>
            <button type="button" onclick="location.href='/areas/st-margarets-cabs'">St Margarets Cabs</button>
            <button type="button" onclick="location.href='/areas/st-mary-cary-cabs'">St Mary Cray Cabs</button>
            <button type="button" onclick="location.href='/areas/sanderstead-cabs'">Sanderstead Cabs</button>
            <button type="button" onclick="location.href='/areas/seven-kings-cabs'">Seven Kings Cabs</button>
            <button type="button" onclick="location.href='/areas/shortlands-cabs'">Shortlands Cabs</button>
            <button type="button" onclick="location.href='/areas/sidcup-cabs'">Sidcup Cabs</button>
            <button type="button" onclick="location.href='/areas/silver-street-cabs'">Silver Street Cabs</button>
            <button type="button" onclick="location.href='/areas/slade-green-cabs'">Slade Green Cabs</button>
            <button type="button" onclick="location.href='/areas/sloane-aquare-cabs'">Sloane Square Cabs</button>
            <button type="button" onclick="location.href='/areas/smitham-cabs'">Smitham Cabs</button>
            <button type="button" onclick="location.href='/areas/snaresbrook-cabs'">Snaresbrook Cabs</button>
            <button type="button" onclick="location.href='/areas/southbury-cabs'">Southbury Cabs</button>
            <button type="button" onclick="location.href='/areas/southfields-cabs'">Southfields Cabs</button>
            <button type="button" onclick="location.href='/areas/stamford-brook-cabs'">Stamford Brook Cabs</button>
            <button type="button" onclick="location.href='/areas/stoke-newington-cabs'">Stoke Newington Cabs</button>
            <button type="button" onclick="location.href='/areas/stonebridge-park-cabs'">Stonebridge Park Cabs</button>
            <button type="button" onclick="location.href='/areas/strawberry-hill-cabs'">Strawberry Hill Cabs</button>
            <button type="button" onclick="location.href='/areas/sudbury-and-harrow-road-cabs'">Sudbury And Harrow Road Cabs</button>
            <button type="button" onclick="location.href='/areas/sundridge-park-cabs'">Sundridge Park Cabs</button>
            <button type="button" onclick="location.href='/areas/syon-lane-cabs'">Syon Lane Cabs</button>
            <button type="button" onclick="location.href='/areas/shirley-cabs'">Shirley Cabs</button>
          </div>
        </li>
        <li>
          <input type="radio" name="accordion" id="19th">
          <label for="19th">Explore areas starting with ( T )</label>
          <div class="contents">
            <button type="button" onclick="location.href='/areas/tadworth-cabs'">Tadworth Cabs</button>
            <button type="button" onclick="location.href='/areas/temple-cabs'">Temple Cabs</button>
            <button type="button" onclick="location.href='/areas/thamesmead-cabs'">Thamesmead Cabs</button>
            <button type="button" onclick="location.href='/areas/tottenham-cabs'">Tottenham Cabs</button>
            <button type="button" onclick="location.href='/areas/tower-hill-cabs'">Tower Hill Cabs</button>
            <button type="button" onclick="location.href='/areas/teddington-taxis'">Teddington Taxis</button>
            <button type="button" onclick="location.href='/areas/thames-ditton-taxis'">Thames Ditton Taxis</button>
            <button type="button" onclick="location.href='/areas/totteridge-taxis'">Totteridge Taxis</button>
            <button type="button" onclick="location.href='/areas/tolworth-taxis'">Tolworth Taxis</button>
            <button type="button" onclick="location.href='/areas/thornton-heath-taxis'">Thornton Heath Taxis</button>
            <button type="button" onclick="location.href='/areas/tooting-taxis'">Tooting Taxis</button>
            <button type="button" onclick="location.href='/areas/tulse-hill-taxis'">Tulse Hill Taxis</button>
            <button type="button" onclick="location.href='/areas/tower-hamlets-taxis'">Tower Hamlets Taxis</button>
            <button type="button" onclick="location.href='/areas/tattenham-corner-cabs'">Tattenham Corner Cabs</button>
            <button type="button" onclick="location.href='/areas/theydon-bois-cabs'">Theydon Bois Cabs</button>
            <button type="button" onclick="location.href='/areas/tufnell-park-cabs'">Tufnell Park Cabs</button>
            <button type="button" onclick="location.href='/areas/turkey-street-cabs'">Turkey Street Cabs</button>
            <button type="button" onclick="location.href='/areas/turnham-green-cabs'">Turnham Green Cabs</button>
            <button type="button" onclick="location.href='/areas/turnpike-lane-cabs'">Turnpike Lane Cabs</button>
            <button type="button" onclick="location.href='/areas/twickenham-cabs'">Twickenham Cabs</button>
          </div>
        </li>
        <li>
          <input type="radio" name="accordion" id="20th">
          <label for="20th">Explore areas starting with ( U )</label>
          <div class="contents">
            <button type="button" onclick="location.href='/areas/upper-halliford-cabs'">Upper Halliford Cabs</button>
            <button type="button" onclick="location.href='/areas/upper-warlingham-cabs'">Upper Warlingham Cabs</button>
            <button type="button" onclick="location.href='/areas/upminster-cabs'">Upminster Cabs</button>
            <button type="button" onclick="location.href='/areas/upney-cabs'">Upney Cabs</button>
            <button type="button" onclick="location.href='/areas/upton-park-cabs'">Upton park Cabs</button>
            <button type="button" onclick="location.href='/areas/uxbridge-cabs'">Uxbridge Cabs</button>
          </div>
        </li>
        <li>
          <input type="radio" name="accordion" id="21st">
          <label for="21st">Explore areas starting with ( V )</label>
          <div class="contents">
            <button type="button" onclick="location.href='/areas/victoria-cabs'">Victoria Cabs</button>
            <button type="button" onclick="location.href='/areas/vauxhall-cabs'">Vauxhall Cabs</button>
          </div>
        </li>
        <li>
          <input type="radio" name="accordion" id="22nd">
          <label for="22nd">Explore areas starting with ( W )</label>
          <div class="contents">
            <button type="button" onclick="location.href='/areas/walthamstow-cabs'">Walthamstow Cabs</button>
            <button type="button" onclick="location.href='/areas/walworth-cabs'">Walworth Cabs</button>
            <button type="button" onclick="location.href='/areas/wanstead-cabs'">Wanstead Cabs</button>
            <button type="button" onclick="location.href='/areas/warwick-avenue-cabs'">Warwick Avenue Cabs</button>
            <button type="button" onclick="location.href='/areas/watford-cabs'">Watford Cabs</button>
            <button type="button" onclick="location.href='/areas/wealdstone-cabs'">Wealdstone Cabs</button>
            <button type="button" onclick="location.href='/areas/welwyn-garden-city-cabs'">Welwyn Garden City Cabs</button>
            <button type="button" onclick="location.href='/areas/wembley-cabs'">Wembley Cabs</button>
            <button type="button" onclick="location.href='/areas/westcombe-park-cabs'">Westcombe Park Cabs</button>
            <button type="button" onclick="location.href='/areas/west-green-cabs'">West Green Cabs</button>
            <button type="button" onclick="location.href='/areas/west-drayton-cabs'">West Drayton Cabs</button>
            <button type="button" onclick="location.href='/areas/whitechapel-cabs'">Whitechapel Cabs</button>
            <button type="button" onclick="location.href='/areas/willesden-cabs'">Willesden Cabs</button>
            <button type="button" onclick="location.href='/areas/wood-green-cabs'">Wood Green Cabs</button>
            <button type="button" onclick="location.href='/areas/woolwich-cabs'">Woolwich Cabs</button>
            <button type="button" onclick="location.href='/areas/worlds-end-cabs'">Worlds End Cabs</button>
            <button type="button" onclick="location.href='/areas/wallington-taxis'">Wallington Taxis</button>
            <button type="button" onclick="location.href='/areas/wandsworth-taxis'">Wandsworth Taxis</button>
            <button type="button" onclick="location.href='/areas/waltham-forest-taxis'">Waltham Forest Taxis</button>
            <button type="button" onclick="location.href='/areas/westminster-taxis'">Westminster Taxis</button>
            <button type="button" onclick="location.href='/areas/winchmore-hill-taxis'">Winchmore Hill Taxis</button>
            <button type="button" onclick="location.href='/areas/well-end-taxis'">Well End Taxis</button>
            <button type="button" onclick="location.href='/areas/woodside-park-taxis'">Woodside Park Taxis</button>
            <button type="button" onclick="location.href='/areas/whitton-taxis'">Whitton Taxis</button>
            <button type="button" onclick="location.href='/areas/wimbledon-taxis'">Wimbledon Taxis</button>
            <button type="button" onclick="location.href='/areas/whetstone-taxis'">Whetstone Taxis</button>
            <button type="button" onclick="location.href='/areas/walton-on-thame-cabs'">Walton On Thames Cabs</button>
            <button type="button" onclick="location.href='/areas/weybridge-cabs'">Weybridge Cabs</button>
            <button type="button" onclick="location.href='/areas/whyteleafe-cabs'">Whyteleafe Cabs</button>
            <button type="button" onclick="location.href='/areas/woldingham-cabs'">Woldingham Cabs</button>
            <button type="button" onclick="location.href='/areas/waddon-cabs'">Waddon Cabs</button>
            <button type="button" onclick="location.href='/areas/warren-street-cabs'">Warren Street Cabs</button>
            <button type="button" onclick="location.href='/areas/waterloo-east-cabs'">Waterloo East Cabs</button>
            <button type="button" onclick="location.href='/areas/welling-cabs'">Welling Cabs</button>
            <button type="button" onclick="location.href='/areas/westbourne-park-cabs'">Westbourne Park Cabs</button>
            <button type="button" onclick="location.href='/areas/west-silvertown-cabs'">West Silvertown Cabs</button>
            <button type="button" onclick="location.href='/areas/west-wickham-cabs'">West Wickham Cabs</button>
            <button type="button" onclick="location.href='/areas/white-city-cabs'">White City Cabs</button>
            <button type="button" onclick="location.href='/areas/white-hart-lane-cabs'">White Hart Lane Cabs</button>
            <button type="button" onclick="location.href='/areas/woodford-cabs'">Woodford Cabs</button>
            <button type="button" onclick="location.href='/areas/woodgrange-park-cabs'">Woodgrange Park Cabs</button>
            <button type="button" onclick="location.href='/areas/woodlane-cabs'">Woodlane Cabs</button>
            <button type="button" onclick="location.href='/areas/woodmansterne-cabs'">Woodmansterne Cabs</button>
            <button type="button" onclick="location.href='/areas/wood-street-cabs'">Wood Street Cabs</button>
            <button type="button" onclick="location.href='/areas/worcester-park-cabs'">Worcester Park Cabs</button>
          </div>
        </li>
        <li>
          <input type="radio" name="accordion" id="23rd">
          <label for="23rd">Explore areas starting with ( Y )</label>
          <div class="contents">
            <button type="button" onclick="location.href='/areas/yeading-cabs'">Yeading Cabs</button>
          </div>
        </li>
      </ul>
    </div>
  </section>

</div>

<!-- section-1 ends here -->


@endsection
