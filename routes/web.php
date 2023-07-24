<?php


// For Home Page Links

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ServicesController;
use App\Http\Controllers\Frontend\AreaCoveredController;
use App\Http\Controllers\Frontend\PartnersController;


// For Airport Services Pages

use App\Http\Controllers\Frontend\AirportServices\ServiceOneController;
use App\Http\Controllers\Frontend\AirportServices\ServiceTwoController;
use App\Http\Controllers\Frontend\AirportServices\ServiceThreeController;
use App\Http\Controllers\Frontend\AirportServices\ServiceFourController;
use App\Http\Controllers\Frontend\AirportServices\ServiceFiveController;


// For Station Services Pages

use App\Http\Controllers\Frontend\StationServices\SeviceOneController;
use App\Http\Controllers\Frontend\StationServices\SeviceTwoController;
use App\Http\Controllers\Frontend\StationServices\SeviceThreeController;
use App\Http\Controllers\Frontend\StationServices\SeviceFourController;
use App\Http\Controllers\Frontend\StationServices\SeviceFiveController;
use App\Http\Controllers\Frontend\StationServices\SeviceSixController;
use App\Http\Controllers\Frontend\StationServices\SeviceSevenController;
use App\Http\Controllers\Frontend\StationServices\SeviceEightController;



// For Area Covered Page


// Areas With ( A )

use App\Http\Controllers\Frontend\AreaCovered\areaswithA\A1Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithA\A2Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithA\A3Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithA\A4Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithA\A5Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithA\A6Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithA\A7Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithA\A8Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithA\A9Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithA\A10Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithA\A11Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithA\A12Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithA\A13Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithA\A14Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithA\A15Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithA\A16Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithA\A17Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithA\A18Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithA\A19Controller;



// Areas With ( B )

use App\Http\Controllers\Frontend\AreaCovered\areaswithB\B1Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithB\B2Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithB\B3Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithB\B4Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithB\B5Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithB\B6Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithB\B7Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithB\B8Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithB\B9Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithB\B10Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithB\B11Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithB\B12Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithB\B13Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithB\B14Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithB\B15Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithB\B16Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithB\B17Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithB\B18Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithB\B19Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithB\B20Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithB\B21Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithB\B22Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithB\B23Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithB\B24Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithB\B25Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithB\B26Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithB\B27Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithB\B28Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithB\B29Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithB\B30Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithB\B31Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithB\B32Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithB\B33Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithB\B34Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithB\B35Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithB\B36Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithB\B37Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithB\B38Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithB\B39Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithB\B40Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithB\B41Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithB\B42Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithB\B43Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithB\B44Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithB\B45Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithB\B46Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithB\B47Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithB\B48Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithB\B49Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithB\B50Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithB\B51Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithB\B52Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithB\B53Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithB\B54Controller;


// Areas With ( C )

use App\Http\Controllers\Frontend\AreaCovered\areaswithC\C1Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithC\C2Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithC\C3Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithC\C4Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithC\C5Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithC\C6Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithC\C7Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithC\C8Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithC\C9Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithC\C10Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithC\C11Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithC\C12Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithC\C13Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithC\C14Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithC\C15Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithC\C16Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithC\C17Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithC\C18Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithC\C19Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithC\C20Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithC\C21Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithC\C22Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithC\C23Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithC\C24Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithC\C25Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithC\C26Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithC\C27Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithC\C28Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithC\C29Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithC\C30Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithC\C31Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithC\C32Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithC\C33Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithC\C34Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithC\C35Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithC\C36Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithC\C37Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithC\C38Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithC\C39Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithC\C40Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithC\C41Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithC\C42Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithC\C43Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithC\C44Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithC\C45Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithC\C46Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithC\C47Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithC\C48Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithC\C49Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithC\C50Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithC\C51Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithC\C52Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithC\C53Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithC\C54Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithC\C55Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithC\C56Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithC\C57Controller;


// Areas With ( D )

use App\Http\Controllers\Frontend\AreaCovered\areaswithD\D1Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithD\D2Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithD\D3Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithD\D4Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithD\D5Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithD\D6Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithD\D7Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithD\D8Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithD\D9Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithD\D10Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithD\D11Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithD\D12Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithD\D13Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithD\D14Controller;


// Areas With ( E )

use App\Http\Controllers\Frontend\AreaCovered\areaswithE\E1Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithE\E2Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithE\E3Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithE\E4Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithE\E5Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithE\E6Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithE\E7Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithE\E8Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithE\E9Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithE\E10Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithE\E11Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithE\E12Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithE\E13Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithE\E14Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithE\E15Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithE\E16Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithE\E17Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithE\E18Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithE\E19Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithE\E20Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithE\E21Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithE\E22Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithE\E23Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithE\E24Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithE\E25Controller;


// Areas With ( F )

use App\Http\Controllers\Frontend\AreaCovered\areaswithF\F1Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithF\F2Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithF\F3Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithF\F4Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithF\F5Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithF\F6Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithF\F7Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithF\F8Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithF\F9Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithF\F10Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithF\F11Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithF\F12Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithF\F13Controller;


// Areas With ( G )

use App\Http\Controllers\Frontend\AreaCovered\areaswithG\G1Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithG\G2Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithG\G3Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithG\G4Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithG\G5Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithG\G6Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithG\G7Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithG\G8Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithG\G9Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithG\G10Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithG\G11Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithG\G12Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithG\G13Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithG\G14Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithG\G15Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithG\G16Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithG\G17Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithG\G18Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithG\G19Controller;


// Areas With ( H )

use App\Http\Controllers\Frontend\AreaCovered\areaswithH\H1Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithH\H2Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithH\H3Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithH\H4Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithH\H5Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithH\H6Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithH\H7Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithH\H8Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithH\H9Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithH\H10Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithH\H11Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithH\H12Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithH\H13Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithH\H14Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithH\H15Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithH\H16Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithH\H17Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithH\H18Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithH\H19Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithH\H20Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithH\H21Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithH\H22Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithH\H23Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithH\H24Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithH\H25Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithH\H26Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithH\H27Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithH\H28Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithH\H29Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithH\H30Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithH\H31Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithH\H32Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithH\H33Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithH\H34Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithH\H35Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithH\H36Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithH\H37Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithH\H38Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithH\H39Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithH\H40Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithH\H41Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithH\H42Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithH\H43Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithH\H44Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithH\H45Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithH\H46Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithH\H47Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithH\H48Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithH\H49Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithH\H50Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithH\H51Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithH\H52Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithH\H53Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithH\H54Controller;


// Areas With ( I )

use App\Http\Controllers\Frontend\AreaCovered\areaswithI\I1Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithI\I2Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithI\I3Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithI\I4Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithI\I5Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithI\I6Controller;


// Areas With ( K )

use App\Http\Controllers\Frontend\AreaCovered\areaswithK\K1Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithK\K2Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithK\K3Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithK\K4Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithK\K5Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithK\K6Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithK\K7Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithK\K8Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithK\K9Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithK\K10Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithK\K11Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithK\K12Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithK\K13Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithK\K14Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithK\K15Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithK\K16Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithK\K17Controller;


// Areas With ( L )

use App\Http\Controllers\Frontend\AreaCovered\areaswithL\L1Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithL\L2Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithL\L3Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithL\L4Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithL\L5Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithL\L6Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithL\L7Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithL\L8Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithL\L9Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithL\L10Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithL\L11Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithL\L12Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithL\L13Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithL\L14Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithL\L15Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithL\L16Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithL\L17Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithL\L18Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithL\L19Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithL\L20Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithL\L21Controller;


// Areas With ( M )

use App\Http\Controllers\Frontend\AreaCovered\areaswithM\M1Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithM\M2Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithM\M3Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithM\M4Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithM\M5Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithM\M6Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithM\M7Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithM\M8Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithM\M9Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithM\M10Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithM\M11Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithM\M12Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithM\M13Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithM\M14Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithM\M15Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithM\M16Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithM\M17Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithM\M18Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithM\M19Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithM\M20Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithM\M21Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithM\M22Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithM\M23Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithM\M24Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithM\M25Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithM\M26Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithM\M27Controller;


// Areas With ( N )

use App\Http\Controllers\Frontend\AreaCovered\areaswithN\N1Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithN\N2Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithN\N3Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithN\N4Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithN\N5Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithN\N6Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithN\N7Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithN\N8Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithN\N9Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithN\N10Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithN\N11Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithN\N12Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithN\N13Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithN\N14Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithN\N15Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithN\N16Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithN\N17Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithN\N18Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithN\N19Controller;


// Areas With ( O )

use App\Http\Controllers\Frontend\AreaCovered\areaswithO\O1Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithO\O2Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithO\O3Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithO\O4Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithO\O5Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithO\O6Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithO\O7Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithO\O8Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithO\O9Controller;


// Areas With ( P )

use App\Http\Controllers\Frontend\AreaCovered\areaswithP\P1Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithP\P2Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithP\P3Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithP\P4Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithP\P5Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithP\P6Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithP\P7Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithP\P8Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithP\P9Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithP\P10Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithP\P11Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithP\P12Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithP\P13Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithP\P14Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithP\P15Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithP\P16Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithP\P17Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithP\P18Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithP\P19Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithP\P20Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithP\P21Controller;


// Areas With ( Q )

use App\Http\Controllers\Frontend\AreaCovered\areaswithQ\Q1Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithQ\Q2Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithQ\Q3Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithQ\Q4Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithQ\Q5Controller;


// Areas With ( R )

use App\Http\Controllers\Frontend\AreaCovered\areaswithR\R1Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithR\R2Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithR\R3Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithR\R4Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithR\R5Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithR\R6Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithR\R7Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithR\R8Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithR\R9Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithR\R10Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithR\R11Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithR\R12Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithR\R13Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithR\R14Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithR\R15Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithR\R16Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithR\R17Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithR\R18Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithR\R19Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithR\R20Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithR\R21Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithR\R22Controller;


// Areas With ( S )

use App\Http\Controllers\Frontend\AreaCovered\areaswithS\S1Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithS\S2Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithS\S3Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithS\S4Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithS\S5Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithS\S6Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithS\S7Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithS\S8Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithS\S9Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithS\S10Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithS\S11Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithS\S12Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithS\S13Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithS\S14Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithS\S15Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithS\S16Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithS\S17Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithS\S18Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithS\S19Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithS\S20Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithS\S21Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithS\S22Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithS\S23Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithS\S24Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithS\S25Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithS\S26Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithS\S27Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithS\S28Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithS\S29Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithS\S30Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithS\S31Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithS\S32Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithS\S33Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithS\S34Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithS\S35Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithS\S36Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithS\S37Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithS\S38Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithS\S39Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithS\S40Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithS\S41Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithS\S42Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithS\S43Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithS\S44Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithS\S45Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithS\S46Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithS\S47Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithS\S48Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithS\S49Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithS\S50Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithS\S51Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithS\S52Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithS\S53Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithS\S54Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithS\S55Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithS\S56Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithS\S57Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithS\S58Controller;


// Areas With ( T )

use App\Http\Controllers\Frontend\AreaCovered\areaswithT\T1Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithT\T2Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithT\T3Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithT\T4Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithT\T5Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithT\T6Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithT\T7Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithT\T8Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithT\T9Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithT\T10Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithT\T11Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithT\T12Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithT\T13Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithT\T14Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithT\T15Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithT\T16Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithT\T17Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithT\T18Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithT\T19Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithT\T20Controller;


// Areas With ( U )

use App\Http\Controllers\Frontend\AreaCovered\areaswithT\U1Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithT\U2Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithT\U3Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithT\U4Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithT\U5Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithT\U6Controller;


// Areas With ( V )

use App\Http\Controllers\Frontend\AreaCovered\areaswithV\V1Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithV\V2Controller;


// Areas With ( W )

use App\Http\Controllers\Frontend\AreaCovered\areaswithW\W1Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithW\W2Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithW\W3Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithW\W4Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithW\W5Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithW\W6Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithW\W7Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithW\W8Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithW\W9Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithW\W10Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithW\W11Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithW\W12Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithW\W13Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithW\W14Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithW\W15Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithW\W16Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithW\W17Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithW\W18Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithW\W19Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithW\W20Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithW\W21Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithW\W22Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithW\W23Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithW\W24Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithW\W25Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithW\W26Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithW\W27Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithW\W28Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithW\W29Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithW\W30Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithW\W31Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithW\W32Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithW\W33Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithW\W34Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithW\W35Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithW\W36Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithW\W37Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithW\W38Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithW\W39Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithW\W40Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithW\W41Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithW\W42Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithW\W43Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithW\W44Controller;
use App\Http\Controllers\Frontend\AreaCovered\areaswithW\W45Controller;


// Areas With ( Y )

use App\Http\Controllers\Frontend\AreaCovered\areaswithY\Y1Controller;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



// For Home Page Links


Route::get('/about', [AboutController::class, 'index']);
Route::get('/services', [ServicesController::class, 'index']);
Route::get('/areacovered', [AreaCoveredController::class, 'index']);
Route::get('/partners', [PartnersController::class, 'index']);


// For Airport Service Pages

Route::get('/airport/heathrow-taxis', [ServiceOneController::class, 'index']);
Route::get('/airport/luton-taxis', [ServiceTwoController::class, 'index']);
Route::get('/airport/gatwick-taxis', [ServiceThreeController::class, 'index']);
Route::get('/airport/stansted-taxis', [ServiceFourController::class, 'index']);
Route::get('/airport/london-city-taxis', [ServiceFiveController::class, 'index']);


// For Station Service Pages

Route::get('/station/paddington-cabs', [SeviceOneController::class, 'index']);
Route::get('/station/euston-cabs', [SeviceTwoController::class, 'index']);
Route::get('/station/victoria-cabs', [SeviceThreeController::class, 'index']);
Route::get('/station/waterloo-cabs', [SeviceFourController::class, 'index']);
Route::get('/station/king-cross-cabs', [SeviceFiveController::class, 'index']);
Route::get('/station/charing-cross-cabs', [SeviceSixController::class, 'index']);
Route::get('/station/london-bridge-cabs', [SeviceSevenController::class, 'index']);
Route::get('/station/wembley-central-cabs', [SeviceEightController::class, 'index']);



// For Area Covered Page


// Areas with ( A )

Route::get('/areas/anerley-taxis', [A1Controller::class, 'index']);
Route::get('/areas/ashtead-cabs', [A2Controller::class, 'index']);
Route::get('/areas/abbey-wood-cabs', [A3Controller::class, 'index']);
Route::get('/areas/aldgate-cabs', [A4Controller::class, 'index']);
Route::get('/areas/action-cabs', [A5Controller::class, 'index']);
Route::get('/areas/alperton-taxis', [A6Controller::class, 'index']);
Route::get('/areas/apex-cornor-taxis', [A7Controller::class, 'index']);
Route::get('/areas/archway-taxis', [A8Controller::class, 'index']);
Route::get('/areas/arkley-taxis', [A9Controller::class, 'index']);
Route::get('/areas/addleston-cabs', [A10Controller::class, 'index']);
Route::get('/areas/ashford-cabs', [A11Controller::class, 'index']);
Route::get('/areas/abbey-road-cabs', [A12Controller::class, 'index']);
Route::get('/areas/albany-park-cabs', [A13Controller::class, 'index']);
Route::get('/areas/alexandra-palace-cabs', [A14Controller::class, 'index']);
Route::get('/areas/all-saints-cabs', [A15Controller::class, 'index']);
Route::get('/areas/amersham-cabs', [A16Controller::class, 'index']);
Route::get('/areas/angel-cabs', [A17Controller::class, 'index']);
Route::get('/areas/arnos-grove-cabs', [A18Controller::class, 'index']);
Route::get('/areas/arsenal-cabs', [A19Controller::class, 'index']);


// Areas with ( B )

Route::get('/areas/botany-bay-taxis', [B1Controller::class, 'index']);
Route::get('/areas/balham-taxis', [B2Controller::class, 'index']);
Route::get('/areas/banstead-taxis', [B3Controller::class, 'index']);
Route::get('/areas/brent-taxis', [B4Controller::class, 'index']);
Route::get('/areas/brockley-taxis', [B5Controller::class, 'index']);
Route::get('/areas/barnet-taxis', [B6Controller::class, 'index']);
Route::get('/areas/beckenham-taxis', [B7Controller::class, 'index']);
Route::get('/areas/belmont-taxis', [B8Controller::class, 'index']);
Route::get('/areas/berrylands-taxis', [B9Controller::class, 'index']);
Route::get('/areas/brixton-taxis', [B10Controller::class, 'index']);
Route::get('/areas/barbican-cabs', [B11Controller::class, 'index']);
Route::get('/areas/barking-cabs', [B12Controller::class, 'index']);
Route::get('/areas/barnes-taxis', [B13Controller::class, 'index']);
Route::get('/areas/battersea-cabs', [B14Controller::class, 'index']);
Route::get('/areas/bayswater-taxis', [B15Controller::class, 'index']);
Route::get('/areas/borehamwood-cabs', [B16Controller::class, 'index']);
Route::get('/areas/bromley-taxis', [B17Controller::class, 'index']);
Route::get('/areas/beckton-taxis', [B18Controller::class, 'index']);
Route::get('/areas/belgravia-taxis', [B19Controller::class, 'index']);
Route::get('/areas/bellingham-taxis', [B20Controller::class, 'index']);
Route::get('/areas/belsize-park-cabs', [B21Controller::class, 'index']);
Route::get('/areas/bermondsey-cabs', [B22Controller::class, 'index']);
Route::get('/areas/brompton-taxis', [B23Controller::class, 'index']);
Route::get('/areas/brondesbury-park-cabs', [B24Controller::class, 'index']);
Route::get('/areas/burnt-oak-cabs', [B25Controller::class, 'index']);
Route::get('/areas/bushey-taxis', [B26Controller::class, 'index']);
Route::get('/areas/brookmans-park-taxis', [B27Controller::class, 'index']);
Route::get('/areas/bethnal-green-taxis', [B28Controller::class, 'index']);
Route::get('/areas/bishopsgate-cabs', [B29Controller::class, 'index']);
Route::get('/areas/blackfriars-cabs', [B30Controller::class, 'index']);
Route::get('/areas/beckheath-cabs', [B31Controller::class, 'index']);
Route::get('/areas/bloomsbury-cabs', [B32Controller::class, 'index']);
Route::get('/areas/borough-taxis', [B33Controller::class, 'index']);
Route::get('/areas/bounds-green-cabs', [B34Controller::class, 'index']);
Route::get('/areas/bow-cabs', [B35Controller::class, 'index']);
Route::get('/areas/buckhurst-hill-cabs', [B36Controller::class, 'index']);
Route::get('/areas/baker-street-cabs', [B37Controller::class, 'index']);
Route::get('/areas/barkingside-road-cabs', [B38Controller::class, 'index']);
Route::get('/areas/barnehurst-cabs', [B39Controller::class, 'index']);
Route::get('/areas/barons-court-cabs', [B40Controller::class, 'index']);
Route::get('/areas/becontree-cabs', [B41Controller::class, 'index']);
Route::get('/areas/belvedere-cabs', [B42Controller::class, 'index']);
Route::get('/areas/bexley-cabs', [B43Controller::class, 'index']);
Route::get('/areas/bickley-cabs', [B44Controller::class, 'index']);
Route::get('/areas/birkbeck-cabs', [B45Controller::class, 'index']);
Route::get('/areas/blackhorse-road-cabs', [B46Controller::class, 'index']);
Route::get('/areas/bond-street-cabs', [B47Controller::class, 'index']);
Route::get('/areas/boston-manor-cabs', [B48Controller::class, 'index']);
Route::get('/areas/bowes-park-cabs', [B49Controller::class, 'index']);
Route::get('/areas/brentford-cabs', [B50Controller::class, 'index']);
Route::get('/areas/brimsdown-cabs', [B51Controller::class, 'index']);
Route::get('/areas/bromley-by-bow-cabs', [B52Controller::class, 'index']);
Route::get('/areas/bruce-grove-cabs', [B53Controller::class, 'index']);
Route::get('/areas/bush-hill-park-cabs', [B54Controller::class, 'index']);


// Areas with ( C )

Route::get('/areas/crews-hill-taxis', [C1Controller::class, 'index']);
Route::get('/areas/camden-taxis', [C2Controller::class, 'index']);
Route::get('/areas/cranbrook-taxis', [C3Controller::class, 'index']);
Route::get('/areas/church-end-taxis', [C4Controller::class, 'index']);
Route::get('/areas/chiswick-taxis', [C5Controller::class, 'index']);
Route::get('/areas/chingford-taxis', [C6Controller::class, 'index']);
Route::get('/areas/charlton-taxis', [C7Controller::class, 'index']);
Route::get('/areas/castelnau-taxis', [C8Controller::class, 'index']);
Route::get('/areas/chessington-cabs', [C9Controller::class, 'index']);
Route::get('/areas/carpenders-park-taxis', [C10Controller::class, 'index']);
Route::get('/areas/canons-park-cabs', [C11Controller::class, 'index']);
Route::get('/areas/canonbury-cabs', [C12Controller::class, 'index']);
Route::get('/areas/caterham-cabs', [C13Controller::class, 'index']);
Route::get('/areas/chertsey-cabs', [C14Controller::class, 'index']);
Route::get('/areas/chigwell-cabs', [C15Controller::class, 'index']);
Route::get('/areas/chipstead-cabs', [C16Controller::class, 'index']);
Route::get('/areas/cobham-cabs', [C17Controller::class, 'index']);
Route::get('/areas/croxley-cabs', [C18Controller::class, 'index']);
Route::get('/areas/canning-town-taxis', [C19Controller::class, 'index']);
Route::get('/areas/cockfosters-taxis', [C20Controller::class, 'index']);
Route::get('/areas/crouch-end-taxis', [C21Controller::class, 'index']);
Route::get('/areas/carshalton-taxis', [C22Controller::class, 'index']);
Route::get('/areas/catford-taxis', [C23Controller::class, 'index']);
Route::get('/areas/clapham-taxis', [C24Controller::class, 'index']);
Route::get('/areas/camberwell-taxis', [C25Controller::class, 'index']);
Route::get('/areas/crofton-park-taxis', [C26Controller::class, 'index']);
Route::get('/areas/cricklewood-taxis', [C27Controller::class, 'index']);
Route::get('/areas/covent-garden-taxis', [C28Controller::class, 'index']);
Route::get('/areas/chelsea-taxis', [C29Controller::class, 'index']);
Route::get('/areas/cheam-taxis', [C30Controller::class, 'index']);
Route::get('/areas/claygate-taxis', [C31Controller::class, 'index']);
Route::get('/areas/colliers-wood-taxis', [C32Controller::class, 'index']);
Route::get('/areas/croydon-taxis', [C33Controller::class, 'index']);
Route::get('/areas/srystal-palace-taxis', [C34Controller::class, 'index']);
Route::get('/areas/cottenham-park-taxis', [C35Controller::class, 'index']);
Route::get('/areas/colindale-taxis', [C36Controller::class, 'index']);
Route::get('/areas/clerkenwell-taxis', [C37Controller::class, 'index']);
Route::get('/areas/clapton-taxis', [C38Controller::class, 'index']);
Route::get('/areas/church-lane-taxis', [C39Controller::class, 'index']);
Route::get('/areas/caledonian-road-cabs', [C40Controller::class, 'index']);
Route::get('/areas/cambridge-heath-cabs', [C41Controller::class, 'index']);
Route::get('/areas/canada-water-cabs', [C42Controller::class, 'index']);
Route::get('/areas/canary-wharf-cabs', [C43Controller::class, 'index']);
Route::get('/areas/cannon-street-cabs', [C44Controller::class, 'index']);
Route::get('/areas/castle-bar-park-cabs', [C45Controller::class, 'index']);
Route::get('/areas/chalfont-and-latimar-cabs', [C46Controller::class, 'index']);
Route::get('/areas/chalkfarm-cabs', [C47Controller::class, 'index']);
Route::get('/areas/chancery-alne-cabs', [C48Controller::class, 'index']);
Route::get('/areas/chelsfield-cabs', [C49Controller::class, 'index']);
Route::get('/areas/chesham-cabs', [C50Controller::class, 'index']);
Route::get('/areas/chislehurst-cabs', [C51Controller::class, 'index']);
Route::get('/areas/chorleywood-cabs', [C52Controller::class, 'index']);
Route::get('/areas/city-thamslink-cabs', [C53Controller::class, 'index']);
Route::get('/areas/clockhouse-cabs', [C54Controller::class, 'index']);
Route::get('/areas/coulsdon-south-cabs', [C55Controller::class, 'index']);
Route::get('/areas/crayford-cabs', [C56Controller::class, 'index']);
Route::get('/areas/crossharbour-dlr-cabs', [C57Controller::class, 'index']);


// Areas with ( D )

Route::get('/areas/drayton-taxis', [D1Controller::class, 'index']);
Route::get('/areas/dollis-hill-taxis', [D2Controller::class, 'index']);
Route::get('/areas/docklands-taxis', [D3Controller::class, 'index']);
Route::get('/areas/deptford-taxis', [D4Controller::class, 'index']);
Route::get('/areas/dulwich-taxis', [D5Controller::class, 'index']);
Route::get('/areas/denham-taxis', [D6Controller::class, 'index']);
Route::get('/areas/dalston-taxis', [D7Controller::class, 'index']);
Route::get('/areas/debden-cabs', [D8Controller::class, 'index']);
Route::get('/areas/dagenham-cabs', [D9Controller::class, 'index']);
Route::get('/areas/dartford-cabs', [D10Controller::class, 'index']);
Route::get('/areas/denmark-hill-cabs', [D11Controller::class, 'index']);
Route::get('/areas/devons-road-cabs', [D12Controller::class, 'index']);
Route::get('/areas/drayton-green-cabs', [D13Controller::class, 'index']);
Route::get('/areas/drayton-park-cabs', [D14Controller::class, 'index']);


// Areas with ( E )

Route::get('/areas/epsom-taxis', [E1Controller::class, 'index']);
Route::get('/areas/esher-taxis', [E2Controller::class, 'index']);
Route::get('/areas/enfield-taxis', [E3Controller::class, 'index']);
Route::get('/areas/earlsfield-taxis', [E4Controller::class, 'index']);
Route::get('/areas/ewall-taxis', [E5Controller::class, 'index']);
Route::get('/areas/ealing-taxis', [E6Controller::class, 'index']);
Route::get('/areas/eltham-taxis', [E7Controller::class, 'index']);
Route::get('/areas/eastcote-taxis', [E8Controller::class, 'index']);
Route::get('/areas/elstree-taxis', [E9Controller::class, 'index']);
Route::get('/areas/edgware-taxis', [E10Controller::class, 'index']);
Route::get('/areas/earls-court-taxis', [E11Controller::class, 'index']);
Route::get('/areas/eden-park-cabs', [E12Controller::class, 'index']);
Route::get('/areas/edgware-road-cabs', [E13Controller::class, 'index']);
Route::get('/areas/edmonton-cabs', [E14Controller::class, 'index']);
Route::get('/areas/elephant-&-castle-cabs', [E15Controller::class, 'index']);
Route::get('/areas/elmers-end-cabs', [E16Controller::class, 'index']);
Route::get('/areas/elm-park-cabs', [E17Controller::class, 'index']);
Route::get('/areas/elmstead-woods-cabs', [E18Controller::class, 'index']);
Route::get('/areas/elverson-road-cabs', [E19Controller::class, 'index']);
Route::get('/areas/embankment-cabs', [E20Controller::class, 'index']);
Route::get('/areas/emerson-aprk-cabs', [E21Controller::class, 'index']);
Route::get('/areas/epping-cabs', [E22Controller::class, 'index']);
Route::get('/areas/erith-cabs', [E23Controller::class, 'index']);
Route::get('/areas/essex-road-cabs', [E24Controller::class, 'index']);
Route::get('/areas/norbiton-taxis', [E25Controller::class, 'index']);


// Areas with ( F )

Route::get('/areas/feltham-taxis', [F1Controller::class, 'index']);
Route::get('/areas/finchley-taxis', [F2Controller::class, 'index']);
Route::get('/areas/forest-hill-taxis', [F3Controller::class, 'index']);
Route::get('/areas/fleet-street-cabs', [F4Controller::class, 'index']);
Route::get('/areas/forest-gate-cabs', [F5Controller::class, 'index']);
Route::get('/areas/fortis-green-cabs', [F6Controller::class, 'index']);
Route::get('/areas/fulham-cabs', [F7Controller::class, 'index']);
Route::get('/areas/fenchurch-street-cabs', [F8Controller::class, 'index']);
Route::get('/areas/finsbury-cabs', [F9Controller::class, 'index']);
Route::get('/areas/fairlop-cabs', [F10Controller::class, 'index']);
Route::get('/areas/falconwood-cabs', [F11Controller::class, 'index']);
Route::get('/areas/farringdon-cabs', [F12Controller::class, 'index']);
Route::get('/areas/fulwell-cabs', [F13Controller::class, 'index']);


// Areas with ( G )

Route::get('/areas/gipsy-hill-taxis', [G1Controller::class, 'index']);
Route::get('/areas/greenwich-taxis', [G2Controller::class, 'index']);
Route::get('/areas/golders-green-cabs', [G3Controller::class, 'index']);
Route::get('/areas/grange-park-cabs', [G4Controller::class, 'index']);
Route::get('/areas/grays-inn-cabs', [G5Controller::class, 'index']);
Route::get('/areas/greenford-cabs', [G6Controller::class, 'index']);
Route::get('/areas/grove-park-cabs', [G7Controller::class, 'index']);
Route::get('/areas/gallions-reach-cabs', [G8Controller::class, 'index']);
Route::get('/areas/gants-hill-cabs', [G9Controller::class, 'index']);
Route::get('/areas/gidea-park-cabs', [G10Controller::class, 'index']);
Route::get('/areas/gloucester-road-cabs', [G11Controller::class, 'index']);
Route::get('/areas/goldhawk-road-cabs', [G12Controller::class, 'index']);
Route::get('/areas/goodle-street-cabs', [G13Controller::class, 'index']);
Route::get('/areas/goodmayes-cabs', [G14Controller::class, 'index']);
Route::get('/areas/gordon-hill-cabs', [G15Controller::class, 'index']);
Route::get('/areas/gospel-oak-cabs', [G16Controller::class, 'index']);
Route::get('/areas/great-portland-street-cabs', [G17Controller::class, 'index']);
Route::get('/areas/greenpark-cabs', [G18Controller::class, 'index']);
Route::get('/areas/gunnersbury-cabs', [G19Controller::class, 'index']);


// Areas with ( H )

Route::get('/areas/homsey-cabs', [H1Controller::class, 'index']);
Route::get('/areas/honor-oak-cabs', [H2Controller::class, 'index']);
Route::get('/areas/hoxton-cabs', [H3Controller::class, 'index']);
Route::get('/areas/hyde-park-cabs', [H4Controller::class, 'index']);
Route::get('/areas/hampton-taxis', [H5Controller::class, 'index']);
Route::get('/areas/hanworth-taxis', [H6Controller::class, 'index']);
Route::get('/areas/hackney-taxis', [H7Controller::class, 'index']);
Route::get('/areas/hamersmith-taxis', [H8Controller::class, 'index']);
Route::get('/areas/haringey-taxis', [H9Controller::class, 'index']);
Route::get('/areas/harrow-taxis', [H10Controller::class, 'index']);
Route::get('/areas/havering-taxis', [H11Controller::class, 'index']);
Route::get('/areas/herne-hill-taxis', [H12Controller::class, 'index']);
Route::get('/areas/hook-taxis', [H13Controller::class, 'index']);
Route::get('/areas/hounslow-taxis', [H14Controller::class, 'index']);
Route::get('/areas/hornsey-taxis', [H15Controller::class, 'index']);
Route::get('/areas/hillingdon-taxis', [H16Controller::class, 'index']);
Route::get('/areas/hadley-wood-taxis', [H17Controller::class, 'index']);
Route::get('/areas/ham-taxis', [H18Controller::class, 'index']);
Route::get('/areas/hatfield-cabs', [H19Controller::class, 'index']);
Route::get('/areas/hayes-cabs', [H20Controller::class, 'index']);
Route::get('/areas/headstone-lane-cabs', [H21Controller::class, 'index']);
Route::get('/areas/hemel-hempstead-cabs', [H22Controller::class, 'index']);
Route::get('/areas/hendon-cabs', [H23Controller::class, 'index']);
Route::get('/areas/hertford-cabs', [H24Controller::class, 'index']);
Route::get('/areas/highams-park-cabs', [H25Controller::class, 'index']);
Route::get('/areas/highbury-cabs', [H26Controller::class, 'index']);
Route::get('/areas/highgate-cabs', [H27Controller::class, 'index']);
Route::get('/areas/hitchin-cabs', [H28Controller::class, 'index']);
Route::get('/areas/hither-green-cabs', [H29Controller::class, 'index']);
Route::get('/areas/holborn-cabs', [H30Controller::class, 'index']);
Route::get('/areas/holland-park-cabs', [H31Controller::class, 'index']);
Route::get('/areas/holloway-cabs', [H32Controller::class, 'index']);
Route::get('/areas/homerton-cabs', [H33Controller::class, 'index']);
Route::get('/areas/hampstead-cabs', [H34Controller::class, 'index']);
Route::get('/areas/hanwell-cabs', [H35Controller::class, 'index']);
Route::get('/areas/harlesdes-cabs', [H36Controller::class, 'index']);
Route::get('/areas/harlington-cabs', [H37Controller::class, 'index']);
Route::get('/areas/harpenden-cabs', [H38Controller::class, 'index']);
Route::get('/areas/harringay-cabs', [H39Controller::class, 'index']);
Route::get('/areas/hatch-end-cabs', [H40Controller::class, 'index']);
Route::get('/areas/hersham-cabs', [H41Controller::class, 'index']);
Route::get('/areas/hinchley-wood-cabs', [H42Controller::class, 'index']);
Route::get('/areas/hackbridge-cabs', [H43Controller::class, 'index']);
Route::get('/areas/hainault-cabs', [H44Controller::class, 'index']);
Route::get('/areas/hanger-lane-cabs', [H45Controller::class, 'index']);
Route::get('/areas/harold-wood-cabs', [H46Controller::class, 'index']);
Route::get('/areas/hatton-cross-cabs', [H47Controller::class, 'index']);
Route::get('/areas/haydons-road-cabs', [H48Controller::class, 'index']);
Route::get('/areas/heathrow-terminal-1-cabs', [H49Controller::class, 'index']);
Route::get('/areas/heathrow-terminal-2-cabs', [H50Controller::class, 'index']);
Route::get('/areas/heathrow-terminal-3-cabs', [H51Controller::class, 'index']);
Route::get('/areas/heathrow-terminal-4-cabs', [H52Controller::class, 'index']);
Route::get('/areas/heathrow-terminal-5-cabs', [H53Controller::class, 'index']);
Route::get('/areas/hornchurch-cabs', [H54Controller::class, 'index']);


// Areas with ( I )

Route::get('/areas/ickenham-cabs', [I1Controller::class, 'index']);
Route::get('/areas/isle-of-dogs-cabs', [I2Controller::class, 'index']);
Route::get('/areas/islington-taxis', [I3Controller::class, 'index']);
Route::get('/areas/ilford-cabs', [I4Controller::class, 'index']);
Route::get('/areas/island-gerdens-cabs', [I5Controller::class, 'index']);
Route::get('/areas/isleworth-cabs', [I6Controller::class, 'index']);


// Areas with ( K )

Route::get('/areas/kenington-cabs', [K1Controller::class, 'index']);
Route::get('/areas/kensal-rise-cabs', [K2Controller::class, 'index']);
Route::get('/areas/kentish-town-cabs', [K3Controller::class, 'index']);
Route::get('/areas/kenton-cabs', [K4Controller::class, 'index']);
Route::get('/areas/kidbrooke-cabs', [K5Controller::class, 'index']);
Route::get('/areas/kilburn-cabs', [K6Controller::class, 'index']);
Route::get('/areas/kingsbury-cabs', [K7Controller::class, 'index']);
Route::get('/areas/kingswood-cabs', [K8Controller::class, 'index']);
Route::get('/areas/knebworth-cabs', [K9Controller::class, 'index']);
Route::get('/areas/knightsbridge-cabs', [K10Controller::class, 'index']);
Route::get('/areas/kensington-taxis', [K11Controller::class, 'index']);
Route::get('/areas/kingston-taxis', [K12Controller::class, 'index']);
Route::get('/areas/kempton-park-cabs', [K13Controller::class, 'index']);
Route::get('/areas/kenley-cabs', [K14Controller::class, 'index']);
Route::get('/areas/kent-house-cabs', [K15Controller::class, 'index']);
Route::get('/areas/kew-bridge-cabs', [K16Controller::class, 'index']);
Route::get('/areas/knockholt-cabs', [K17Controller::class, 'index']);


// Areas with ( L )

Route::get('/areas/ladbroke-grove-cabs', [L1Controller::class, 'index']);
Route::get('/areas/lee-cabs', [L2Controller::class, 'index']);
Route::get('/areas/letchworth-cabs', [L3Controller::class, 'index']);
Route::get('/areas/leytonstone-cabs', [L4Controller::class, 'index']);
Route::get('/areas/liverpool-street-cabs', [L5Controller::class, 'index']);
Route::get('/areas/longford-cabs', [L6Controller::class, 'index']);
Route::get('/areas/letchmore-heath-taxis', [L7Controller::class, 'index']);
Route::get('/areas/lewisham-taxis', [L8Controller::class, 'index']);
Route::get('/areas/lambeth-taxis', [L9Controller::class, 'index']);
Route::get('/areas/london-colney-taxis', [L10Controller::class, 'index']);
Route::get('/areas/long-ditton-taxis', [L11Controller::class, 'index']);
Route::get('/areas/leatherhead-cabs', [L12Controller::class, 'index']);
Route::get('/areas/lougton-cabs', [L13Controller::class, 'index']);
Route::get('/areas/ladywell-cabs', [L14Controller::class, 'index']);
Route::get('/areas/langdon-park-cabs', [L15Controller::class, 'index']);
Route::get('/areas/latimer-road-cabs', [L16Controller::class, 'index']);
Route::get('/areas/leicester-square-cabs', [L17Controller::class, 'index']);
Route::get('/areas/leyton-cabs', [L18Controller::class, 'index']);
Route::get('/areas/limehouse-cabs', [L19Controller::class, 'index']);
Route::get('/areas/london-fields-cabs', [L20Controller::class, 'index']);
Route::get('/areas/loughborough-junction-cabs', [L21Controller::class, 'index']);


// Areas with ( M )

Route::get('/areas/maida-hill-cabs', [M1Controller::class, 'index']);
Route::get('/areas/manor-house-cabs', [M2Controller::class, 'index']);
Route::get('/areas/manor-park-cabs', [M3Controller::class, 'index']);
Route::get('/areas/mayfair-cabs', [M4Controller::class, 'index']);
Route::get('/areas/mile-end-cabs', [M5Controller::class, 'index']);
Route::get('/areas/millwall-cabs', [M6Controller::class, 'index']);
Route::get('/areas/monks-park-cabs', [M7Controller::class, 'index']);
Route::get('/areas/monument-cabs', [M8Controller::class, 'index']);
Route::get('/areas/moorgate-cabs', [M9Controller::class, 'index']);
Route::get('/areas/moorpark-cabs', [M10Controller::class, 'index']);
Route::get('/areas/mortlake-cabs', [M11Controller::class, 'index']);
Route::get('/areas/mottingham-cabs', [M12Controller::class, 'index']);
Route::get('/areas/mill-hill-taxis', [M13Controller::class, 'index']);
Route::get('/areas/morden-taxis', [M14Controller::class, 'index']);
Route::get('/areas/monken-hadley-taxis', [M15Controller::class, 'index']);
Route::get('/areas/muswell-hill-taxis', [M16Controller::class, 'index']);
Route::get('/areas/motspur-park-taxis', [M17Controller::class, 'index']);
Route::get('/areas/merton-taxis', [M18Controller::class, 'index']);
Route::get('/areas/malden-manor-taxis', [M19Controller::class, 'index']);
Route::get('/areas/mitcham-taxis', [M20Controller::class, 'index']);
Route::get('/areas/molesey-taxis', [M21Controller::class, 'index']);
Route::get('/areas/mansion-house-cabs', [M22Controller::class, 'index']);
Route::get('/areas/marble-arch-cabs', [M23Controller::class, 'index']);
Route::get('/areas/maryland-cabs', [M24Controller::class, 'index']);
Route::get('/areas/marylebone-cabs', [M25Controller::class, 'index']);
Route::get('/areas/maze-hill-cabs', [M26Controller::class, 'index']);
Route::get('/areas/mornington-crescent-cabs', [M27Controller::class, 'index']);


// Areas with ( N )

Route::get('/areas/northolt-cabs', [N1Controller::class, 'index']);
Route::get('/areas/northwick-park-cabs', [N2Controller::class, 'index']);
Route::get('/areas/northwood-cabs', [N3Controller::class, 'index']);
Route::get('/areas/norbiton-taxis', [N4Controller::class, 'index']);
Route::get('/areas/notting-hill-cabs', [N5Controller::class, 'index']);
Route::get('/areas/nunhead-cabs', [N6Controller::class, 'index']);
Route::get('/areas/neasden-cabs', [N7Controller::class, 'index']);
Route::get('/areas/new-cross-cabs', [N8Controller::class, 'index']);
Route::get('/areas/newington-cabs', [N9Controller::class, 'index']);
Route::get('/areas/nine-elms-cabs', [N10Controller::class, 'index']);
Route::get('/areas/new-malden-taxis', [N11Controller::class, 'index']);
Route::get('/areas/norwood-taxis', [N12Controller::class, 'index']);
Route::get('/areas/northaw-taxis', [N13Controller::class, 'index']);
Route::get('/areas/norbury-taxis', [N14Controller::class, 'index']);
Route::get('/areas/newham-taxis', [N15Controller::class, 'index']);
Route::get('/areas/newbury-park-cabs', [N16Controller::class, 'index']);
Route::get('/areas/north-fields-cabs', [N17Controller::class, 'index']);
Route::get('/areas/north-sheen-cabs', [N18Controller::class, 'index']);
Route::get('/areas/orthumberland-park-cabs', [N19Controller::class, 'index']);


// Areas with ( O )

Route::get('/areas/orpington-taxis', [O1Controller::class, 'index']);
Route::get('/areas/oakwood-taxis', [O2Controller::class, 'index']);
Route::get('/areas/oakleight-park-taxis', [O3Controller::class, 'index']);
Route::get('/areas/oxshott-cabs', [O4Controller::class, 'index']);
Route::get('/areas/old-street-cabs', [O5Controller::class, 'index']);
Route::get('/areas/osterley-cabs', [O6Controller::class, 'index']);
Route::get('/areas/oval-cabs', [O7Controller::class, 'index']);
Route::get('/areas/oxford-circus-cabs', [O8Controller::class, 'index']);
Route::get('/areas/old-kent-road-cabs', [O9Controller::class, 'index']);


// Areas with ( P )

Route::get('/areas/parsons-green-cabs', [P1Controller::class, 'index']);
Route::get('/areas/peckham-cabs', [P2Controller::class, 'index']);
Route::get('/areas/perivale-cabs', [P3Controller::class, 'index']);
Route::get('/areas/pimlico-cabs', [P4Controller::class, 'index']);
Route::get('/areas/pinner-cabs', [P5Controller::class, 'index']);
Route::get('/areas/plaistow-cabs', [P6Controller::class, 'index']);
Route::get('/areas/plumstead-cabs', [P7Controller::class, 'index']);
Route::get('/areas/poplar-cabs', [P8Controller::class, 'index']);
Route::get('/areas/preston-road-cabs', [P9Controller::class, 'index']);
Route::get('/areas/penge-taxis', [P10Controller::class, 'index']);
Route::get('/areas/putney-taxis', [P11Controller::class, 'index']);
Route::get('/areas/palmers-green-taxis', [P12Controller::class, 'index']);
Route::get('/areas/purley-taxis', [P13Controller::class, 'index']);
Route::get('/areas/potters-end-taxis', [P14Controller::class, 'index']);
Route::get('/areas/park-royal-cabs', [P15Controller::class, 'index']);
Route::get('/areas/peckham-rye-cabs', [P16Controller::class, 'index']);
Route::get('/areas/petts-wood-cabs', [P17Controller::class, 'index']);
Route::get('/areas/piccadilly-circus-cabs', [P18Controller::class, 'index']);
Route::get('/areas/pontoon-dock-cabs', [P19Controller::class, 'index']);
Route::get('/areas/prince-regent-cabs', [P20Controller::class, 'index']);
Route::get('/areas/pudding-mill-lane-cabs', [P21Controller::class, 'index']);


// Areas with ( Q )

Route::get('/areas/queensbury-cabs', [Q1Controller::class, 'index']);
Route::get('/areas/queens-park-cabs', [Q2Controller::class, 'index']);
Route::get('/areas/queens-road-peckham-cabs', [Q3Controller::class, 'index']);
Route::get('/areas/queenstown-road-cabs', [Q4Controller::class, 'index']);
Route::get('/areas/queensway-cabs', [Q5Controller::class, 'index']);


// Areas with ( R )

Route::get('/areas/rayners-lane-cabs', [R1Controller::class, 'index']);
Route::get('/areas/regents-park-cabs', [R2Controller::class, 'index']);
Route::get('/areas/rose-hill-cabs', [R3Controller::class, 'index']);
Route::get('/areas/rotherhithe-cabs', [R4Controller::class, 'index']);
Route::get('/areas/ruislip-cabs', [R5Controller::class, 'index']);
Route::get('/areas/redbridge-taxis', [R6Controller::class, 'index']);
Route::get('/areas/radlett-taxis', [R7Controller::class, 'index']);
Route::get('/areas/richmond-taxis', [R8Controller::class, 'index']);
Route::get('/areas/roehampton-taxis', [R9Controller::class, 'index']);
Route::get('/areas/raynes-park-taxis', [R10Controller::class, 'index']);
Route::get('/areas/rickmansworth-cabs', [R11Controller::class, 'index']);
Route::get('/areas/roding-valley-cabs', [R12Controller::class, 'index']);
Route::get('/areas/rinham-cabs', [R13Controller::class, 'index']);
Route::get('/areas/ravensbourne-caabs', [R14Controller::class, 'index']);
Route::get('/areas/ravenscourt-park-cabs', [R15Controller::class, 'index']);
Route::get('/areas/rectory-road-cabs', [R16Controller::class, 'index']);
Route::get('/areas/reedham-cabs', [R17Controller::class, 'index']);
Route::get('/areas/riddlesdown-cabs', [R18Controller::class, 'index']);
Route::get('/areas/ramford-cabs', [R19Controller::class, 'index']);
Route::get('/areas/royal-albert-cabs', [R20Controller::class, 'index']);
Route::get('/areas/royal-oak-cabs', [R21Controller::class, 'index']);
Route::get('/areas/russel-square-cabs', [R22Controller::class, 'index']);


// Areas with ( S )

Route::get('/areas/sadbury-cabs', [S1Controller::class, 'index']);
Route::get('/areas/surrey-docks-cabs', [S2Controller::class, 'index']);
Route::get('/areas/swiss-cottage-cabs', [S3Controller::class, 'index']);
Route::get('/areas/seven-sisters-cabs', [S4Controller::class, 'index']);
Route::get('/areas/sherherds-bush-cabs', [S5Controller::class, 'index']);
Route::get('/areas/shoreditch-cabs', [S6Controller::class, 'index']);
Route::get('/areas/soho-cabs', [S7Controller::class, 'index']);
Route::get('/areas/southall-cabs', [S8Controller::class, 'index']);
Route::get('/areas/stanmore-cabs', [S9Controller::class, 'index']);
Route::get('/areas/staples-corner-cabs', [S10Controller::class, 'index']);
Route::get('/areas/stepney-cabs', [S11Controller::class, 'index']);
Route::get('/areas/stevenage-cabs', [S12Controller::class, 'index']);
Route::get('/areas/st-johns-wood-cabs', [S13Controller::class, 'index']);
Route::get('/areas/stockwell-cabs', [S14Controller::class, 'index']);
Route::get('/areas/stoke-cabs', [S15Controller::class, 'index']);
Route::get('/areas/st-pancras-cabs', [S16Controller::class, 'index']);
Route::get('/areas/st-pauls-cabs', [S17Controller::class, 'index']);
Route::get('/areas/strand-cabs', [S18Controller::class, 'index']);
Route::get('/areas/stratford-cabs', [S19Controller::class, 'index']);
Route::get('/areas/southgate-taxis', [S20Controller::class, 'index']);
Route::get('/areas/surrey-taxis', [S21Controller::class, 'index']);
Route::get('/areas/south-mimms-taxis', [S22Controller::class, 'index']);
Route::get('/areas/shenley-taxis', [S23Controller::class, 'index']);
Route::get('/areas/sutton-taxis', [S24Controller::class, 'index']);
Route::get('/areas/surbiton-taxis', [S25Controller::class, 'index']);
Route::get('/areas/selhurst-park-taxis', [S26Controller::class, 'index']);
Route::get('/areas/southwark-taxis', [S27Controller::class, 'index']);
Route::get('/areas/stoneleigh-taxis', [S28Controller::class, 'index']);
Route::get('/areas/scratchwood-taxis', [S29Controller::class, 'index']);
Route::get('/areas/st-albans-taxis', [S30Controller::class, 'index']);
Route::get('/areas/streatham-taxis', [S31Controller::class, 'index']);
Route::get('/areas/sydenham-taxis', [S32Controller::class, 'index']);
Route::get('/areas/shepperton-cabs', [S33Controller::class, 'index']);
Route::get('/areas/staines-cabs', [S34Controller::class, 'index']);
Route::get('/areas/st-jamess-park-cabs', [S35Controller::class, 'index']);
Route::get('/areas/st-helier-cabs', [S36Controller::class, 'index']);
Route::get('/areas/st-james-street-cabs', [S37Controller::class, 'index']);
Route::get('/areas/st-margarets-cabs', [S38Controller::class, 'index']);
Route::get('/areas/st-mary-cary-cabs', [S39Controller::class, 'index']);
Route::get('/areas/sanderstead-cabs', [S40Controller::class, 'index']);
Route::get('/areas/seven-kings-cabs', [S41Controller::class, 'index']);
Route::get('/areas/shortlands-cabs', [S42Controller::class, 'index']);
Route::get('/areas/sidcup-cabs', [S43Controller::class, 'index']);
Route::get('/areas/silver-street-cabs', [S44Controller::class, 'index']);
Route::get('/areas/slade-green-cabs', [S45Controller::class, 'index']);
Route::get('/areas/sloane-aquare-cabs', [S46Controller::class, 'index']);
Route::get('/areas/smitham-cabs', [S47Controller::class, 'index']);
Route::get('/areas/snaresbrook-cabs', [S48Controller::class, 'index']);
Route::get('/areas/southbury-cabs', [S49Controller::class, 'index']);
Route::get('/areas/southfields-cabs', [S50Controller::class, 'index']);
Route::get('/areas/stamford-brook-cabs', [S51Controller::class, 'index']);
Route::get('/areas/stoke-newington-cabs', [S52Controller::class, 'index']);
Route::get('/areas/stonebridge-park-cabs', [S53Controller::class, 'index']);
Route::get('/areas/strawberry-hill-cabs', [S54Controller::class, 'index']);
Route::get('/areas/sudbury-and-harrow-road-cabs', [S55Controller::class, 'index']);
Route::get('/areas/sundridge-park-cabs', [S56Controller::class, 'index']);
Route::get('/areas/syon-lane-cabs', [S57Controller::class, 'index']);
Route::get('/areas/shirley-cabs', [S58Controller::class, 'index']);


// Areas with ( T )

Route::get('/areas/tadworth-cabs', [T1Controller::class, 'index']);
Route::get('/areas/temple-cabs', [T2Controller::class, 'index']);
Route::get('/areas/thamesmead-cabs', [T3Controller::class, 'index']);
Route::get('/areas/tottenham-cabs', [T4Controller::class, 'index']);
Route::get('/areas/tower-hill-cabs', [T5Controller::class, 'index']);
Route::get('/areas/teddington-taxis', [T6Controller::class, 'index']);
Route::get('/areas/thames-ditton-taxis', [T7Controller::class, 'index']);
Route::get('/areas/totteridge-taxis', [T8Controller::class, 'index']);
Route::get('/areas/tolworth-taxis', [T9Controller::class, 'index']);
Route::get('/areas/thornton-heath-taxis', [T10Controller::class, 'index']);
Route::get('/areas/tooting-taxis', [T11Controller::class, 'index']);
Route::get('/areas/tulse-hill-taxis', [T12Controller::class, 'index']);
Route::get('/areas/tower-hamlets-taxis', [T13Controller::class, 'index']);
Route::get('/areas/tattenham-corner-cabs', [T14Controller::class, 'index']);
Route::get('/areas/theydon-bois-cabs', [T15Controller::class, 'index']);
Route::get('/areas/tufnell-park-cabs', [T16Controller::class, 'index']);
Route::get('/areas/turkey-street-cabs', [T17Controller::class, 'index']);
Route::get('/areas/turnham-green-cabs', [T18Controller::class, 'index']);
Route::get('/areas/turnpike-lane-cabs', [T19Controller::class, 'index']);
Route::get('/areas/twickenham-cabs', [T20Controller::class, 'index']);


// Areas with ( U )

Route::get('/areas/upper-halliford-cabs', [U1Controller::class, 'index']);
Route::get('/areas/upper-warlingham-cabs', [U2Controller::class, 'index']);
Route::get('/areas/upminster-cabs', [U3Controller::class, 'index']);
Route::get('/areas/upney-cabs', [U4Controller::class, 'index']);
Route::get('/areas/upton-park-cabs', [U5Controller::class, 'index']);
Route::get('/areas/uxbridge-cabs', [U6Controller::class, 'index']);


// Areas with ( V )

Route::get('/areas/victoria-cabs', [V1Controller::class, 'index']);
Route::get('/areas/vauxhall-cabs', [V2Controller::class, 'index']);


// Areas with ( W )

Route::get('/areas/walthamstow-cabs', [W1Controller::class, 'index']);
Route::get('/areas/walworth-cabs', [W2Controller::class, 'index']);
Route::get('/areas/wanstead-cabs', [W3Controller::class, 'index']);
Route::get('/areas/warwick-avenue-cabs', [W4Controller::class, 'index']);
Route::get('/areas/watford-cabs', [W5Controller::class, 'index']);
Route::get('/areas/wealdstone-cabs', [W6Controller::class, 'index']);
Route::get('/areas/welwyn-garden-city-cabs', [W7Controller::class, 'index']);
Route::get('/areas/wembley-cabs', [W8Controller::class, 'index']);
Route::get('/areas/westcombe-park-cabs', [W9Controller::class, 'index']);
Route::get('/areas/west-green-cabs', [W10Controller::class, 'index']);
Route::get('/areas/west-drayton-cabs', [W11Controller::class, 'index']);
Route::get('/areas/whitechapel-cabs', [W12Controller::class, 'index']);
Route::get('/areas/willesden-cabs', [W13Controller::class, 'index']);
Route::get('/areas/wood-green-cabs', [W14Controller::class, 'index']);
Route::get('/areas/woolwich-cabs', [W15Controller::class, 'index']);
Route::get('/areas/worlds-end-cabs', [W16Controller::class, 'index']);
Route::get('/areas/wallington-taxis', [W17Controller::class, 'index']);
Route::get('/areas/wandsworth-taxis', [W18Controller::class, 'index']);
Route::get('/areas/waltham-forest-taxis', [W19Controller::class, 'index']);
Route::get('/areas/westminster-taxis', [W20Controller::class, 'index']);
Route::get('/areas/winchmore-hill-taxis', [W21Controller::class, 'index']);
Route::get('/areas/well-end-taxis', [W22Controller::class, 'index']);
Route::get('/areas/woodside-park-taxis', [W23Controller::class, 'index']);
Route::get('/areas/whitton-taxis', [W24Controller::class, 'index']);
Route::get('/areas/wimbledon-taxis', [W25Controller::class, 'index']);
Route::get('/areas/whetstone-taxis', [W26Controller::class, 'index']);
Route::get('/areas/walton-on-thame-cabs', [W27Controller::class, 'index']);
Route::get('/areas/weybridge-cabs', [W28Controller::class, 'index']);
Route::get('/areas/whyteleafe-cabs', [W29Controller::class, 'index']);
Route::get('/areas/woldingham-cabs', [W30Controller::class, 'index']);
Route::get('/areas/waddon-cabs', [W31Controller::class, 'index']);
Route::get('/areas/warren-street-cabs', [W32Controller::class, 'index']);
Route::get('/areas/waterloo-east-cabs', [W33Controller::class, 'index']);
Route::get('/areas/welling-cabs', [W34Controller::class, 'index']);
Route::get('/areas/westbourne-park-cabs', [W35Controller::class, 'index']);
Route::get('/areas/west-silvertown-cabs', [W36Controller::class, 'index']);
Route::get('/areas/west-wickham-cabs', [W37Controller::class, 'index']);
Route::get('/areas/white-city-cabs', [W38Controller::class, 'index']);
Route::get('/areas/white-hart-lane-cabs', [W39Controller::class, 'index']);
Route::get('/areas/woodford-cabs', [W40Controller::class, 'index']);
Route::get('/areas/woodgrange-park-cabs', [W41Controller::class, 'index']);
Route::get('/areas/woodlane-cabs', [W42Controller::class, 'index']);
Route::get('/areas/woodmansterne-cabs', [W43Controller::class, 'index']);
Route::get('/areas/wood-street-cabs', [W44Controller::class, 'index']);
Route::get('/areas/worcester-park-cabs', [W45Controller::class, 'index']);


// Areas with ( Y )

Route::get('/areas/yeading-cabs', [Y1Controller::class, 'index']);