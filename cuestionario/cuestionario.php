<!DOCTYPE html>
<html>
<head>    
    <title>SISTEMA DE BANCO DE SANGRE</title>
    <link rel="shortcut icon" href="../images/ingreso.ico" />    
    <link rel="stylesheet" href="../css/plantilla.css" type="text/css"  media="screen" />
    <link rel="stylesheet" href="../css/estilos.css" type="text/css" />       	   
    <script language="javascript" type="text/javascript" src="js/jquery-1.4.3.min.js"></script>
    <script language="javascript" type="text/javascript" src="js/jquery.blockUI.js"></script>
    <script language="javascript" type="text/javascript" src="js/index.js"></script>      
</head>
<body>
    <div class="contenedor">
        <header>  </header>
        <div id="cuerpo">
            <h1>Recepcion de Donantes</h1>                        
                <form action="" id="recepcion" name="recepcion" class="carga"> 
                    <div class="resultado">
                        <fieldset>
                            <legend>Cuestionario</legend>
                                <table id="grilla" class="lista">
                                    <thead>
                                        <tr>
                                          <th>Nro</th>
                                          <th>Cuestionario</th>		
                                          <th>si</th>
                                          <th>no</th>
                                        </tr>
                                    </thead>
                                    <tr>
                                      <td>1</td>
                                      <td>Leyo y comprendio la hoja de informacion que se le dio en la sal de espera?</td>		
                                      <td><input type="radio" name="pregunta1" value="si"></td>
                                      <td><input type="radio" name="pregunta1" value="no"></td>
                                    </tr>
                                    <tr>
                                      <td>2</td>
                                      <td>Actualmente se siente bien y goza de buena salud?</td>		
                                      <td><input type="radio" name="pregunta2" value="si"></td>
                                      <td><input type="radio" name="pregunta2" value="no"></td>
                                    </tr>
                                    <tr>
                                      <td>3</td>
                                      <td>Ha donado sangre en las ultimas 8 semanas?</td>		
                                      <td><input type="radio" name="pregunta3" value="si"></td>
                                      <td><input type="radio" name="pregunta3" value="no"></td>
                                    </tr>
                                    <tr>
                                      <td>4</td>
                                      <td>Lo han rechazado como donante de sangre o le dijeron que no puede donar?</td>		
                                      <td><input type="radio" name="pregunta4" value="si"></td>
                                      <td><input type="radio" name="pregunta4" value="no"></td>
                                    </tr> 
                                    <tr>
                                      <td>5</td>
                                      <td>Sufrio algun inconbeniente despues de la donacion?</td>		
                                      <td><input type="radio" name="pregunta5" value="si"></td>
                                      <td><input type="radio" name="pregunta5" value="no"></td>
                                    </tr>
                                    <tr>
                                      <td>6</td>
                                      <td>Ha tenido convulsiones,Epilepsia o perdida de conocimiento?</td>		
                                      <td><input type="radio" name="pregunta6" value="si"></td>
                                      <td><input type="radio" name="pregunta6" value="no"></td>
                                    </tr> 
                                    <tr>
                                      <td>7</td>
                                      <td>Ha tenido Infarto,dolor de pecho,enfermedades cardiacas, renales o pulmonares?</td>		
                                      <td><input type="radio" name="pregunta7" value="si"></td>
                                      <td><input type="radio" name="pregunta7" value="no"></td>
                                    </tr>  
                                    <tr>
                                      <td>8</td>
                                      <td>Ha tenido Ictericia(piel amarilla), hepatitis o analisis positivo de hepatitis?</td>		
                                      <td><input type="radio" name="pregunta8" value="si"></td>
                                      <td><input type="radio" name="pregunta8" value="no"></td>
                                    </tr>       
                                    <tr>
                                      <td>9</td>
                                      <td>Ha tenido enfermedad de chagas o analisis ?</td>		
                                      <td><input type="radio" name="pregunta9" value="si"></td>
                                      <td><input type="radio" name="pregunta9" value="no"></td>
                                    </tr>           
                                    <tr>
                                      <td>10</td>
                                      <td>Ha recivido hormonas de crecimiento humano o transplante de meninges?</td>		
                                      <td><input type="radio" name="pregunta10" value="si"></td>
                                      <td><input type="radio" name="pregunta10" value="no"></td>
                                    </tr>   
                                    <tr>
                                      <td>11</td>
                                      <td>Tubo Paludismo o estuvo en zonas endemicas de Paludismo?</td>		
                                      <td><input type="radio" name="pregunta11" value="si"></td>
                                      <td><input type="radio" name="pregunta11" value="no"></td>
                                    </tr>   
                                    <tr>
                                      <td>12</td>
                                      <td>Dona usted sangre para que se le haga el analisis de SIDA?</td>		
                                      <td><input type="radio" name="pregunta12" value="si"></td>
                                      <td><input type="radio" name="pregunta12" value="no"></td>
                                    </tr>      
                                    <tr>
                                      <td>13</td>
                                      <td>Ha tenido perdida de peso inexplicable, fiebre mas de 10 dias, diarrea o ganglios inflamados?</td>		
                                      <td><input type="radio" name="pregunta13" value="si"></td>
                                      <td><input type="radio" name="pregunta13" value="no"></td>
                                    </tr>  
                                    <tr>
                                      <td>14</td>
                                      <td>Comprendio lo que significa "periodo de ventana"?</td>		
                                      <td><input type="radio" name="pregunta14" value="si"></td>
                                      <td><input type="radio" name="pregunta14" value="no"></td>
                                    </tr>      
                                    <tr>
                                      <td>15</td>
                                      <td>¿Es portador del virus del SIDA o hepatitis B o C o cree que tiene riesgo de serlo?</td>		
                                      <td><input type="radio" name="pregunta15" value="si"></td>
                                      <td><input type="radio" name="pregunta15" value="no"></td>
                                    </tr>    
                                    <tr>
                                      <td>16</td>
                                      <td>¿Tomo medicacion para el acne,soriasis o para la prostata?¿es alergico a los medicamentos?</td>		
                                      <td><input type="radio" name="pregunta16" value="si"></td>
                                      <td><input type="radio" name="pregunta16" value="no"></td>
                                    </tr>                                     
                                </table>
                        </fieldset>
                        <fieldset>
                            <legend>En los ultimos 12 meses</legend>
                            <table id="grilla" class="lista">
                                    <tr>
                                      <td>17</td>
                                      <td>Se le ha realido una laparoscopia, endoscopia, biopsia o ha sido operado?</td>		
                                      <td><input type="radio" name="pregunta17" value="si"></td>
                                      <td><input type="radio" name="pregunta17" value="no"></td>
                                    </tr>
                                    <tr>
                                      <td>18</td>
                                      <td>ha recibido transfusiones de sangre o plasma o recibio transplante de organos o tejido?</td>		
                                      <td><input type="radio" name="pregunta18" value="si"></td>
                                      <td><input type="radio" name="pregunta18" value="no"></td>
                                    </tr>  
                                    <tr>
                                      <td>19</td>
                                      <td>Le han hecho tatuajes, acupuntura, perforacion de orejas o piel o pinchazos de agujas?</td>		
                                      <td><input type="radio" name="pregunta19" value="si"></td>
                                      <td><input type="radio" name="pregunta19" value="no"></td>
                                    </tr>
                                    <tr>
                                      <td>20</td>
                                      <td>PARA MUJER: ha estado embarazada, ha tenido cesariea, parto o aborto?</td>		
                                      <td><input type="radio" name="pregunta20" value="si"></td>
                                      <td><input type="radio" name="pregunta20" value="no"></td>
                                    </tr>  
                                    <tr>
                                      <td>21</td>
                                      <td>Ha tenidoo tiene relaciones sexuales de riesgo?¿mas de una pareja?¿pareja del mismo sexo?</td>		
                                      <td><input type="radio" name="pregunta21" value="si"></td>
                                      <td><input type="radio" name="pregunta21" value="no"></td>
                                    </tr>
                                    <tr>
                                      <td>22</td>
                                      <td>tubo sexo con personas en dialisis, con homofilicos, drogadictos, HIV(SIDA) o Hepatitis?</td>		
                                      <td><input type="radio" name="pregunta22" value="si"></td>
                                      <td><input type="radio" name="pregunta22" value="no"></td>
                                    </tr>  
                                    <tr>
                                      <td>23</td>
                                      <td>Estuvo detenido en Instituciones Carcelarias, Policiales o Mentales?</td>		
                                      <td><input type="radio" name="pregunta23" value="si"></td>
                                      <td><input type="radio" name="pregunta23" value="no"></td>
                                    </tr>
                                    <tr>
                                      <td>24</td>
                                      <td>ha sido tratado por sifilis, gonorrea u otra enfermedad venerea?</td>		
                                      <td><input type="radio" name="pregunta24" value="si"></td>
                                      <td><input type="radio" name="pregunta24" value="no"></td>
                                    </tr>  
                                    <tr>
                                      <td>25</td>
                                      <td>Usa o ha usado drogas inyectables otras, o ha tenido sexo con alguien que las usa?</td>		
                                      <td><input type="radio" name="pregunta25" value="si"></td>
                                      <td><input type="radio" name="pregunta25" value="no"></td>
                                    </tr>                                   
                            </table>
                        </fieldset>
                        <fieldset>
                            <legend>EN LAS ULTIMAS 4 SEMANAS</legend>
                            <table id="grilla" class="lista">
                                    <tr>
                                      <td>26</td>
                                      <td>Ha recibido vacunas o inmunizaciones?</td>		
                                      <td><input type="radio" name="pregunta26" value="si"></td>
                                      <td><input type="radio" name="pregunta26" value="no"></td>
                                    </tr>                                   
                            </table>
                        </fieldset>
                        <fieldset>
                            <legend>EN LAS ULTIMOS 7 DIAS</legend>
                            <table id="grilla" class="lista">
                                    <tr>
                                      <td>27</td>
                                      <td>Ha presentado fiebre, dolor de garganta, diarrea o ha tomado algun medicamento?</td>		
                                      <td><input type="radio" name="pregunta27" value="si"></td>
                                      <td><input type="radio" name="pregunta27" value="no"></td>
                                    </tr>                                   
                            </table>
                        </fieldset>   
                        <fieldset>
                            <legend>EN LAS ULTIMOS 3 DIAS</legend>
                            <table id="grilla" class="lista">
                                    <tr>
                                      <td>28</td>
                                      <td>Ha sido sometido a tratamiento odontologico o atencion medica?</td>		
                                      <td><input type="radio" name="pregunta28" value="si"></td>
                                      <td><input type="radio" name="pregunta28" value="no"></td>
                                    </tr>       
                                    <tr>
                                      <td>29</td>
                                      <td>Ha recibido Aspirina, antiinflamatorios o calmantes?</td>		
                                      <td><input type="radio" name="pregunta29" value="si"></td>
                                      <td><input type="radio" name="pregunta29" value="no"></td>
                                    </tr>    
                                    <tr>
                                      <td>30</td>
                                      <td>Recibirta alguna compensacion por donar sangre?</td>		
                                      <td><input type="radio" name="pregunta30" value="si"></td>
                                      <td><input type="radio" name="pregunta30" value="no"></td>
                                    </tr>                                     
                            </table>
                        </fieldset>                          
                    </div>
                        <div>
                            <input type="submit" name="Enviar" placeholder="Enviar" alt="Enviar" title="Enviar">                                
                        </div>                      
                </form>
        </div>        
</body>
</html>

