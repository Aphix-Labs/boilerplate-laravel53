<?php

use Illuminate\Database\Seeder;
use App\Comuna;
use App\ServicioSalud;

class ComunasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comunas = [
                    [ "code" => 15101, "name" => "Arica", "servicio" => "Arica" ],
                    [ "code" => 15102, "name" => "Camarones", "servicio" => "Arica" ],
                    [ "code" => 15201, "name" => "Putre", "servicio" => "Arica" ],
                    [ "code" => 15202, "name" => "General Lagos", "servicio" => "Arica" ],
                    [ "code" => 1101, "name" => "Iquique", "servicio" => "Iquique" ],
                    [ "code" => 1402, "name" => "Camiña", "servicio" => "Iquique" ],
                    [ "code" => 1403, "name" => "Colchane", "servicio" => "Iquique" ],
                    [ "code" => 1404, "name" => "Huara", "servicio" => "Iquique" ],
                    [ "code" => 1405, "name" => "Pica", "servicio" => "Iquique" ],
                    [ "code" => 1401, "name" => "Pozo Almonte", "servicio" => "Iquique" ],
                    [ "code" => 1107, "name" => "Alto Hospicio", "servicio" => "Iquique" ],
                    [ "code" => 2101, "name" => "Antofagasta", "servicio" => "Antofagasta" ],
                    [ "code" => 2102, "name" => "Mejillones", "servicio" => "Antofagasta" ],
                    [ "code" => 2103, "name" => "Sierra Gorda", "servicio" => "Antofagasta" ],
                    [ "code" => 2104, "name" => "Taltal", "servicio" => "Antofagasta" ],
                    [ "code" => 2201, "name" => "Calama", "servicio" => "Antofagasta" ],
                    [ "code" => 2202, "name" => "Ollagüe", "servicio" => "Antofagasta" ],
                    [ "code" => 2203, "name" => "San Pedro de Atacama", "servicio" => "Antofagasta" ],
                    [ "code" => 2301, "name" => "Tocopilla", "servicio" => "Antofagasta" ],
                    [ "code" => 2302, "name" => "María Elena", "servicio" => "Antofagasta" ],
                    [ "code" => 3101, "name" => "Copiapó", "servicio" => "Atacama" ],
                    [ "code" => 3102, "name" => "Caldera", "servicio" => "Atacama" ],
                    [ "code" => 3103, "name" => "Tierra Amarilla", "servicio" => "Atacama" ],
                    [ "code" => 3201, "name" => "Chañaral", "servicio" => "Atacama" ],
                    [ "code" => 3202, "name" => "Diego de Almagro", "servicio" => "Atacama" ],
                    [ "code" => 3301, "name" => "Vallenar", "servicio" => "Atacama" ],
                    [ "code" => 3302, "name" => "Alto del Carmen", "servicio" => "Atacama" ],
                    [ "code" => 3303, "name" => "Freirina", "servicio" => "Atacama" ],
                    [ "code" => 3304, "name" => "Huasco", "servicio" => "Atacama" ],
                    [ "code" => 4101, "name" => "La Serena", "servicio" => "Coquimbo" ],
                    [ "code" => 4102, "name" => "Coquimbo", "servicio" => "Coquimbo" ],
                    [ "code" => 4103, "name" => "Andacollo", "servicio" => "Coquimbo" ],
                    [ "code" => 4104, "name" => "La Higuera", "servicio" => "Coquimbo" ],
                    [ "code" => 4105, "name" => "Paiguano", "servicio" => "Coquimbo" ],
                    [ "code" => 4106, "name" => "Vicuña", "servicio" => "Coquimbo" ],
                    [ "code" => 4201, "name" => "Illapel", "servicio" => "Coquimbo" ],
                    [ "code" => 4202, "name" => "Canela", "servicio" => "Coquimbo" ],
                    [ "code" => 4203, "name" => "Los Vilos", "servicio" => "Coquimbo" ],
                    [ "code" => 4204, "name" => "Salamanca", "servicio" => "Coquimbo" ],
                    [ "code" => 4301, "name" => "Ovalle", "servicio" => "Coquimbo" ],
                    [ "code" => 4302, "name" => "Combarbalá", "servicio" => "Coquimbo" ],
                    [ "code" => 4303, "name" => "Monte Patria", "servicio" => "Coquimbo" ],
                    [ "code" => 4304, "name" => "Punitaqui", "servicio" => "Coquimbo" ],
                    [ "code" => 4305, "name" => "Río Hurtado", "servicio" => "Coquimbo" ],
                    [ "code" => 5101, "name" => "Valparaíso", "servicio" => "Valparaíso San Antonio" ],
                    [ "code" => 5102, "name" => "Casablanca", "servicio" => "Valparaíso San Antonio" ],
                    [ "code" => 5103, "name" => "Concón", "servicio" => "Viña del Mar Quillota" ],
                    [ "code" => 5104, "name" => "Juan Fernández", "servicio" => "Valparaíso San Antonio" ],
                    [ "code" => 5105, "name" => "Puchuncaví", "servicio" => "Viña del Mar Quillota" ],
                    [ "code" => 5801, "name" => "Quilpué", "servicio" => "Viña del Mar Quillota" ],
                    [ "code" => 5107, "name" => "Quintero", "servicio" => "Viña del Mar Quillota" ],
                    [ "code" => 5804, "name" => "Villa Alemana", "servicio" => "Viña del Mar Quillota" ],
                    [ "code" => 5109, "name" => "Viña del Mar", "servicio" => "Viña del Mar Quillota" ],
                    [ "code" => 5201, "name" => "Isla  de Pascua", "servicio" => "Metropolitano Oriente" ],
                    [ "code" => 5301, "name" => "Los Andes", "servicio" => "Aconcagua" ],
                    [ "code" => 5302, "name" => "Calle Larga", "servicio" => "Aconcagua" ],
                    [ "code" => 5303, "name" => "Rinconada", "servicio" => "Aconcagua" ],
                    [ "code" => 5304, "name" => "San Esteban", "servicio" => "Aconcagua" ],
                    [ "code" => 5401, "name" => "La Ligua", "servicio" => "Viña del Mar Quillota" ],
                    [ "code" => 5402, "name" => "Cabildo", "servicio" => "Viña del Mar Quillota" ],
                    [ "code" => 5403, "name" => "Papudo", "servicio" => "Viña del Mar Quillota" ],
                    [ "code" => 5404, "name" => "Petorca", "servicio" => "Viña del Mar Quillota" ],
                    [ "code" => 5405, "name" => "Zapallar", "servicio" => "Viña del Mar Quillota" ],
                    [ "code" => 5501, "name" => "Quillota", "servicio" => "Viña del Mar Quillota" ],
                    [ "code" => 5502, "name" => "Calera", "servicio" => "Viña del Mar Quillota" ],
                    [ "code" => 5503, "name" => "Hijuelas", "servicio" => "Viña del Mar Quillota" ],
                    [ "code" => 5504, "name" => "La Cruz", "servicio" => "Viña del Mar Quillota" ],
                    [ "code" => 5802, "name" => "Limache", "servicio" => "Viña del Mar Quillota" ],
                    [ "code" => 5506, "name" => "Nogales", "servicio" => "Viña del Mar Quillota" ],
                    [ "code" => 5803, "name" => "Olmué", "servicio" => "Viña del Mar Quillota" ],
                    [ "code" => 5601, "name" => "San Antonio", "servicio" => "Valparaíso San Antonio" ],
                    [ "code" => 5602, "name" => "Algarrobo", "servicio" => "Valparaíso San Antonio" ],
                    [ "code" => 5603, "name" => "Cartagena", "servicio" => "Valparaíso San Antonio" ],
                    [ "code" => 5604, "name" => "El Quisco", "servicio" => "Valparaíso San Antonio" ],
                    [ "code" => 5605, "name" => "El Tabo", "servicio" => "Valparaíso San Antonio" ],
                    [ "code" => 5606, "name" => "Santo Domingo", "servicio" => "Valparaíso San Antonio" ],
                    [ "code" => 5701, "name" => "San Felipe", "servicio" => "Aconcagua" ],
                    [ "code" => 5702, "name" => "Catemu", "servicio" => "Aconcagua" ],
                    [ "code" => 5703, "name" => "Llaillay", "servicio" => "Aconcagua" ],
                    [ "code" => 5704, "name" => "Panquehue", "servicio" => "Aconcagua" ],
                    [ "code" => 5705, "name" => "Putaendo", "servicio" => "Aconcagua" ],
                    [ "code" => 5706, "name" => "Santa María", "servicio" => "Aconcagua" ],
                    [ "code" => 6101, "name" => "Rancagua", "servicio" => "Del Libertador B.O'Higgins" ],
                    [ "code" => 6102, "name" => "Codegua", "servicio" => "Del Libertador B.O'Higgins" ],
                    [ "code" => 6103, "name" => "Coinco", "servicio" => "Del Libertador B.O'Higgins" ],
                    [ "code" => 6104, "name" => "Coltauco", "servicio" => "Del Libertador B.O'Higgins" ],
                    [ "code" => 6105, "name" => "Doñihue", "servicio" => "Del Libertador B.O'Higgins" ],
                    [ "code" => 6106, "name" => "Graneros", "servicio" => "Del Libertador B.O'Higgins" ],
                    [ "code" => 6107, "name" => "Las Cabras", "servicio" => "Del Libertador B.O'Higgins" ],
                    [ "code" => 6108, "name" => "Machalí", "servicio" => "Del Libertador B.O'Higgins" ],
                    [ "code" => 6109, "name" => "Malloa", "servicio" => "Del Libertador B.O'Higgins" ],
                    [ "code" => 6110, "name" => "Mostazal", "servicio" => "Del Libertador B.O'Higgins" ],
                    [ "code" => 6111, "name" => "Olivar", "servicio" => "Del Libertador B.O'Higgins" ],
                    [ "code" => 6112, "name" => "Peumo", "servicio" => "Del Libertador B.O'Higgins" ],
                    [ "code" => 6113, "name" => "Pichidegua", "servicio" => "Del Libertador B.O'Higgins" ],
                    [ "code" => 6114, "name" => "Quinta de Tilcoco", "servicio" => "Del Libertador B.O'Higgins" ],
                    [ "code" => 6115, "name" => "Rengo", "servicio" => "Del Libertador B.O'Higgins" ],
                    [ "code" => 6116, "name" => "Requínoa", "servicio" => "Del Libertador B.O'Higgins" ],
                    [ "code" => 6117, "name" => "San Vicente", "servicio" => "Del Libertador B.O'Higgins" ],
                    [ "code" => 6201, "name" => "Pichilemu", "servicio" => "Del Libertador B.O'Higgins" ],
                    [ "code" => 6202, "name" => "La Estrella", "servicio" => "Del Libertador B.O'Higgins" ],
                    [ "code" => 6203, "name" => "Litueche", "servicio" => "Del Libertador B.O'Higgins" ],
                    [ "code" => 6204, "name" => "Marchihue", "servicio" => "Del Libertador B.O'Higgins" ],
                    [ "code" => 6205, "name" => "Navidad", "servicio" => "Del Libertador B.O'Higgins" ],
                    [ "code" => 6206, "name" => "Paredones", "servicio" => "Del Libertador B.O'Higgins" ],
                    [ "code" => 6301, "name" => "San Fernando", "servicio" => "Del Libertador B.O'Higgins" ],
                    [ "code" => 6302, "name" => "Chépica", "servicio" => "Del Libertador B.O'Higgins" ],
                    [ "code" => 6303, "name" => "Chimbarongo", "servicio" => "Del Libertador B.O'Higgins" ],
                    [ "code" => 6304, "name" => "Lolol", "servicio" => "Del Libertador B.O'Higgins" ],
                    [ "code" => 6305, "name" => "Nancagua", "servicio" => "Del Libertador B.O'Higgins" ],
                    [ "code" => 6306, "name" => "Palmilla", "servicio" => "Del Libertador B.O'Higgins" ],
                    [ "code" => 6307, "name" => "Peralillo", "servicio" => "Del Libertador B.O'Higgins" ],
                    [ "code" => 6308, "name" => "Placilla", "servicio" => "Del Libertador B.O'Higgins" ],
                    [ "code" => 6309, "name" => "Pumanque", "servicio" => "Del Libertador B.O'Higgins" ],
                    [ "code" => 6310, "name" => "Santa Cruz", "servicio" => "Del Libertador B.O'Higgins" ],
                    [ "code" => 7101, "name" => "Talca", "servicio" => "Del Maule" ],
                    [ "code" => 7102, "name" => "Constitución", "servicio" => "Del Maule" ],
                    [ "code" => 7103, "name" => "Curepto", "servicio" => "Del Maule" ],
                    [ "code" => 7104, "name" => "Empedrado", "servicio" => "Del Maule" ],
                    [ "code" => 7105, "name" => "Maule", "servicio" => "Del Maule" ],
                    [ "code" => 7106, "name" => "Pelarco", "servicio" => "Del Maule" ],
                    [ "code" => 7107, "name" => "Pencahue", "servicio" => "Del Maule" ],
                    [ "code" => 7108, "name" => "Río Claro", "servicio" => "Del Maule" ],
                    [ "code" => 7109, "name" => "San Clemente", "servicio" => "Del Maule" ],
                    [ "code" => 7110, "name" => "San Rafael", "servicio" => "Del Maule" ],
                    [ "code" => 7201, "name" => "Cauquenes", "servicio" => "Del Maule" ],
                    [ "code" => 7202, "name" => "Chanco", "servicio" => "Del Maule" ],
                    [ "code" => 7203, "name" => "Pelluhue", "servicio" => "Del Maule" ],
                    [ "code" => 7301, "name" => "Curicó", "servicio" => "Del Maule" ],
                    [ "code" => 7302, "name" => "Hualañé", "servicio" => "Del Maule" ],
                    [ "code" => 7303, "name" => "Licantén", "servicio" => "Del Maule" ],
                    [ "code" => 7304, "name" => "Molina", "servicio" => "Del Maule" ],
                    [ "code" => 7305, "name" => "Rauco", "servicio" => "Del Maule" ],
                    [ "code" => 7306, "name" => "Romeral", "servicio" => "Del Maule" ],
                    [ "code" => 7307, "name" => "Sagrada Familia", "servicio" => "Del Maule" ],
                    [ "code" => 7308, "name" => "Teno", "servicio" => "Del Maule" ],
                    [ "code" => 7309, "name" => "Vichuquén", "servicio" => "Del Maule" ],
                    [ "code" => 7401, "name" => "Linares", "servicio" => "Del Maule" ],
                    [ "code" => 7402, "name" => "Colbún", "servicio" => "Del Maule" ],
                    [ "code" => 7403, "name" => "Longaví", "servicio" => "Del Maule" ],
                    [ "code" => 7404, "name" => "Parral", "servicio" => "Del Maule" ],
                    [ "code" => 7405, "name" => "Retiro", "servicio" => "Del Maule" ],
                    [ "code" => 7406, "name" => "San Javier", "servicio" => "Del Maule" ],
                    [ "code" => 7407, "name" => "Villa Alegre", "servicio" => "Del Maule" ],
                    [ "code" => 7408, "name" => "Yerbas Buenas", "servicio" => "Del Maule" ],
                    [ "code" => 8101, "name" => "Concepción", "servicio" => "Concepción" ],
                    [ "code" => 8102, "name" => "Coronel", "servicio" => "Concepción" ],
                    [ "code" => 8103, "name" => "Chiguayante", "servicio" => "Concepción" ],
                    [ "code" => 8104, "name" => "Florida", "servicio" => "Concepción" ],
                    [ "code" => 8105, "name" => "Hualqui", "servicio" => "Concepción" ],
                    [ "code" => 8106, "name" => "Lota", "servicio" => "Concepción" ],
                    [ "code" => 8107, "name" => "Penco", "servicio" => "Talcahuano" ],
                    [ "code" => 8108, "name" => "San Pedro de la Paz", "servicio" => "Concepción" ],
                    [ "code" => 8109, "name" => "Santa Juana", "servicio" => "Concepción" ],
                    [ "code" => 8110, "name" => "Talcahuano", "servicio" => "Talcahuano" ],
                    [ "code" => 8111, "name" => "Tomé", "servicio" => "Talcahuano" ],
                    [ "code" => 8112, "name" => "Hualpén", "servicio" => "Talcahuano" ],
                    [ "code" => 8201, "name" => "Lebu", "servicio" => "Arauco" ],
                    [ "code" => 8202, "name" => "Arauco", "servicio" => "Arauco" ],
                    [ "code" => 8203, "name" => "Cañete", "servicio" => "Arauco" ],
                    [ "code" => 8204, "name" => "Contulmo", "servicio" => "Arauco" ],
                    [ "code" => 8205, "name" => "Curanilahue", "servicio" => "Arauco" ],
                    [ "code" => 8206, "name" => "Los Álamos", "servicio" => "Arauco" ],
                    [ "code" => 8207, "name" => "Tirúa", "servicio" => "Arauco" ],
                    [ "code" => 8301, "name" => "Los Ángeles", "servicio" => "Biobío" ],
                    [ "code" => 8302, "name" => "Antuco", "servicio" => "Biobío" ],
                    [ "code" => 8303, "name" => "Cabrero", "servicio" => "Biobío" ],
                    [ "code" => 8304, "name" => "Laja", "servicio" => "Biobío" ],
                    [ "code" => 8305, "name" => "Mulchén", "servicio" => "Biobío" ],
                    [ "code" => 8306, "name" => "Nacimiento", "servicio" => "Biobío" ],
                    [ "code" => 8307, "name" => "Negrete", "servicio" => "Biobío" ],
                    [ "code" => 8308, "name" => "Quilaco", "servicio" => "Biobío" ],
                    [ "code" => 8309, "name" => "Quilleco", "servicio" => "Biobío" ],
                    [ "code" => 8310, "name" => "San Rosendo", "servicio" => "Biobío" ],
                    [ "code" => 8311, "name" => "Santa Bárbara", "servicio" => "Biobío" ],
                    [ "code" => 8312, "name" => "Tucapel", "servicio" => "Biobío" ],
                    [ "code" => 8313, "name" => "Yumbel", "servicio" => "Biobío" ],
                    [ "code" => 8314, "name" => "Alto Biobío", "servicio" => "Biobío" ],
                    [ "code" => 8401, "name" => "Chillán", "servicio" => "Ñuble" ],
                    [ "code" => 8402, "name" => "Bulnes", "servicio" => "Ñuble" ],
                    [ "code" => 8403, "name" => "Cobquecura", "servicio" => "Ñuble" ],
                    [ "code" => 8404, "name" => "Coelemu", "servicio" => "Ñuble" ],
                    [ "code" => 8405, "name" => "Coihueco", "servicio" => "Ñuble" ],
                    [ "code" => 8406, "name" => "Chillán Viejo", "servicio" => "Ñuble" ],
                    [ "code" => 8407, "name" => "El Carmen", "servicio" => "Ñuble" ],
                    [ "code" => 8408, "name" => "Ninhue", "servicio" => "Ñuble" ],
                    [ "code" => 8409, "name" => "Ñiquén", "servicio" => "Ñuble" ],
                    [ "code" => 8410, "name" => "Pemuco", "servicio" => "Ñuble" ],
                    [ "code" => 8411, "name" => "Pinto", "servicio" => "Ñuble" ],
                    [ "code" => 8412, "name" => "Portezuelo", "servicio" => "Ñuble" ],
                    [ "code" => 8413, "name" => "Quillón", "servicio" => "Ñuble" ],
                    [ "code" => 8414, "name" => "Quirihue", "servicio" => "Ñuble" ],
                    [ "code" => 8415, "name" => "Ránquil", "servicio" => "Ñuble" ],
                    [ "code" => 8416, "name" => "San Carlos", "servicio" => "Ñuble" ],
                    [ "code" => 8417, "name" => "San Fabián", "servicio" => "Ñuble" ],
                    [ "code" => 8418, "name" => "San Ignacio", "servicio" => "Ñuble" ],
                    [ "code" => 8419, "name" => "San Nicolás", "servicio" => "Ñuble" ],
                    [ "code" => 8420, "name" => "Treguaco", "servicio" => "Ñuble" ],
                    [ "code" => 8421, "name" => "Yungay", "servicio" => "Ñuble" ],
                    [ "code" => 9101, "name" => "Temuco", "servicio" => "Araucanía Sur" ],
                    [ "code" => 9102, "name" => "Carahue", "servicio" => "Araucanía Sur" ],
                    [ "code" => 9103, "name" => "Cunco", "servicio" => "Araucanía Sur" ],
                    [ "code" => 9104, "name" => "Curarrehue", "servicio" => "Araucanía Sur" ],
                    [ "code" => 9105, "name" => "Freire", "servicio" => "Araucanía Sur" ],
                    [ "code" => 9106, "name" => "Galvarino", "servicio" => "Araucanía Sur" ],
                    [ "code" => 9107, "name" => "Gorbea", "servicio" => "Araucanía Sur" ],
                    [ "code" => 9108, "name" => "Lautaro", "servicio" => "Araucanía Sur" ],
                    [ "code" => 9109, "name" => "Loncoche", "servicio" => "Araucanía Sur" ],
                    [ "code" => 9110, "name" => "Melipeuco", "servicio" => "Araucanía Sur" ],
                    [ "code" => 9111, "name" => "Nueva Imperial", "servicio" => "Araucanía Sur" ],
                    [ "code" => 9112, "name" => "Padre Las Casas", "servicio" => "Araucanía Sur" ],
                    [ "code" => 9113, "name" => "Perquenco", "servicio" => "Araucanía Sur" ],
                    [ "code" => 9114, "name" => "Pitrufquén", "servicio" => "Araucanía Sur" ],
                    [ "code" => 9115, "name" => "Pucón", "servicio" => "Araucanía Sur" ],
                    [ "code" => 9116, "name" => "Saavedra", "servicio" => "Araucanía Sur" ],
                    [ "code" => 9117, "name" => "Teodoro Schmidt", "servicio" => "Araucanía Sur" ],
                    [ "code" => 9118, "name" => "Toltén", "servicio" => "Araucanía Sur" ],
                    [ "code" => 9119, "name" => "Vilcún", "servicio" => "Araucanía Sur" ],
                    [ "code" => 9120, "name" => "Villarrica", "servicio" => "Araucanía Sur" ],
                    [ "code" => 9121, "name" => "Cholchol", "servicio" => "Araucanía Sur" ],
                    [ "code" => 9201, "name" => "Angol", "servicio" => "Araucanía Norte" ],
                    [ "code" => 9202, "name" => "Collipulli", "servicio" => "Araucanía Norte" ],
                    [ "code" => 9203, "name" => "Curacautín", "servicio" => "Araucanía Norte" ],
                    [ "code" => 9204, "name" => "Ercilla", "servicio" => "Araucanía Norte" ],
                    [ "code" => 9205, "name" => "Lonquimay", "servicio" => "Araucanía Norte" ],
                    [ "code" => 9206, "name" => "Los Sauces", "servicio" => "Araucanía Norte" ],
                    [ "code" => 9207, "name" => "Lumaco", "servicio" => "Araucanía Norte" ],
                    [ "code" => 9208, "name" => "Purén", "servicio" => "Araucanía Norte" ],
                    [ "code" => 9209, "name" => "Renaico", "servicio" => "Araucanía Norte" ],
                    [ "code" => 9210, "name" => "Traiguén", "servicio" => "Araucanía Norte" ],
                    [ "code" => 9211, "name" => "Victoria", "servicio" => "Araucanía Norte" ],
                    [ "code" => 14101, "name" => "Valdivia", "servicio" => "Valdivia" ],
                    [ "code" => 14102, "name" => "Corral", "servicio" => "Valdivia" ],
                    [ "code" => 14202, "name" => "Futrono", "servicio" => "Valdivia" ],
                    [ "code" => 14201, "name" => "La Unión", "servicio" => "Valdivia" ],
                    [ "code" => 14203, "name" => "Lago Ranco", "servicio" => "Valdivia" ],
                    [ "code" => 14103, "name" => "Lanco", "servicio" => "Valdivia" ],
                    [ "code" => 14104, "name" => "Los Lagos", "servicio" => "Valdivia" ],
                    [ "code" => 14105, "name" => "Máfil", "servicio" => "Valdivia" ],
                    [ "code" => 14106, "name" => "Mariquina", "servicio" => "Valdivia" ],
                    [ "code" => 14107, "name" => "Paillaco", "servicio" => "Valdivia" ],
                    [ "code" => 14108, "name" => "Panguipulli", "servicio" => "Valdivia" ],
                    [ "code" => 14204, "name" => "Río Bueno", "servicio" => "Valdivia" ],
                    [ "code" => 10101, "name" => "Puerto Montt", "servicio" => "Del Reloncaví" ],
                    [ "code" => 10102, "name" => "Calbuco", "servicio" => "Del Reloncaví" ],
                    [ "code" => 10103, "name" => "Cochamó", "servicio" => "Del Reloncaví" ],
                    [ "code" => 10104, "name" => "Fresia", "servicio" => "Del Reloncaví" ],
                    [ "code" => 10105, "name" => "Frutillar", "servicio" => "Del Reloncaví" ],
                    [ "code" => 10106, "name" => "Los Muermos", "servicio" => "Del Reloncaví" ],
                    [ "code" => 10107, "name" => "Llanquihue", "servicio" => "Del Reloncaví" ],
                    [ "code" => 10108, "name" => "Maullín", "servicio" => "Del Reloncaví" ],
                    [ "code" => 10109, "name" => "Puerto Varas", "servicio" => "Del Reloncaví" ],
                    [ "code" => 10201, "name" => "Castro", "servicio" => "Chiloé" ],
                    [ "code" => 10202, "name" => "Ancud", "servicio" => "Chiloé" ],
                    [ "code" => 10203, "name" => "Chonchi", "servicio" => "Chiloé" ],
                    [ "code" => 10204, "name" => "Curaco de Vélez", "servicio" => "Chiloé" ],
                    [ "code" => 10205, "name" => "Dalcahue", "servicio" => "Chiloé" ],
                    [ "code" => 10206, "name" => "Puqueldón", "servicio" => "Chiloé" ],
                    [ "code" => 10207, "name" => "Queilén", "servicio" => "Chiloé" ],
                    [ "code" => 10208, "name" => "Quellón", "servicio" => "Chiloé" ],
                    [ "code" => 10209, "name" => "Quemchi", "servicio" => "Chiloé" ],
                    [ "code" => 10210, "name" => "Quinchao", "servicio" => "Chiloé" ],
                    [ "code" => 10301, "name" => "Osorno", "servicio" => "Osorno" ],
                    [ "code" => 10302, "name" => "Puerto Octay", "servicio" => "Osorno" ],
                    [ "code" => 10303, "name" => "Purranque", "servicio" => "Osorno" ],
                    [ "code" => 10304, "name" => "Puyehue", "servicio" => "Osorno" ],
                    [ "code" => 10305, "name" => "Río Negro", "servicio" => "Osorno" ],
                    [ "code" => 10306, "name" => "San Juan de la Costa", "servicio" => "Osorno" ],
                    [ "code" => 10307, "name" => "San Pablo", "servicio" => "Osorno" ],
                    [ "code" => 10401, "name" => "Chaitén", "servicio" => "Del Reloncaví" ],
                    [ "code" => 10402, "name" => "Futaleufú", "servicio" => "Del Reloncaví" ],
                    [ "code" => 10403, "name" => "Hualaihué", "servicio" => "Del Reloncaví" ],
                    [ "code" => 10404, "name" => "Palena", "servicio" => "Del Reloncaví" ],
                    [ "code" => 11101, "name" => "Coihaique", "servicio" => "Aisén" ],
                    [ "code" => 11102, "name" => "Lago Verde", "servicio" => "Aisén" ],
                    [ "code" => 11201, "name" => "Aisén", "servicio" => "Aisén" ],
                    [ "code" => 11202, "name" => "Cisnes", "servicio" => "Aisén" ],
                    [ "code" => 11203, "name" => "Guaitecas", "servicio" => "Aisén" ],
                    [ "code" => 11301, "name" => "Cochrane", "servicio" => "Aisén" ],
                    [ "code" => 11302, "name" => "O'Higgins", "servicio" => "Aisén" ],
                    [ "code" => 11303, "name" => "Tortel", "servicio" => "Aisén" ],
                    [ "code" => 11401, "name" => "Chile Chico", "servicio" => "Aisén" ],
                    [ "code" => 11402, "name" => "Río Ibáñez", "servicio" => "Aisén" ],
                    [ "code" => 12101, "name" => "Punta Arenas", "servicio" => "Magallanes" ],
                    [ "code" => 12102, "name" => "Laguna Blanca", "servicio" => "Magallanes" ],
                    [ "code" => 12103, "name" => "Río Verde", "servicio" => "Magallanes" ],
                    [ "code" => 12104, "name" => "San Gregorio", "servicio" => "Magallanes" ],
                    [ "code" => 12201, "name" => "Cabo de Hornos", "servicio" => "Magallanes" ],
                    [ "code" => 12202, "name" => "Antártica", "servicio" => "Magallanes" ],
                    [ "code" => 12301, "name" => "Porvenir", "servicio" => "Magallanes" ],
                    [ "code" => 12302, "name" => "Primavera", "servicio" => "Magallanes" ],
                    [ "code" => 12303, "name" => "Timaukel", "servicio" => "Magallanes" ],
                    [ "code" => 12401, "name" => "Natales", "servicio" => "Magallanes" ],
                    [ "code" => 12402, "name" => "Torres del Paine", "servicio" => "Magallanes" ],
                    [ "code" => 13101, "name" => "Santiago", "servicio" => "Metropolitano Central" ],
                    [ "code" => 13102, "name" => "Cerrillos", "servicio" => "Metropolitano Central" ],
                    [ "code" => 13103, "name" => "Cerro Navia", "servicio" => "Metropolitano Occidente" ],
                    [ "code" => 13104, "name" => "Conchalí", "servicio" => "Metropolitano Norte" ],
                    [ "code" => 13105, "name" => "El Bosque", "servicio" => "Metropolitano Sur" ],
                    [ "code" => 13106, "name" => "Estación Central", "servicio" => "Metropolitano Central" ],
                    [ "code" => 13107, "name" => "Huechuraba", "servicio" => "Metropolitano Norte" ],
                    [ "code" => 13108, "name" => "Independencia", "servicio" => "Metropolitano Norte" ],
                    [ "code" => 13109, "name" => "La Cisterna", "servicio" => "Metropolitano Sur" ],
                    [ "code" => 13110, "name" => "La Florida", "servicio" => "Metropolitano Sur Oriente" ],
                    [ "code" => 13111, "name" => "La Granja", "servicio" => "Metropolitano Sur Oriente" ],
                    [ "code" => 13112, "name" => "La Pintana", "servicio" => "Metropolitano Sur Oriente" ],
                    [ "code" => 13113, "name" => "La Reina", "servicio" => "Metropolitano Oriente" ],
                    [ "code" => 13114, "name" => "Las Condes", "servicio" => "Metropolitano Oriente" ],
                    [ "code" => 13115, "name" => "Lo Barnechea", "servicio" => "Metropolitano Oriente" ],
                    [ "code" => 13116, "name" => "Lo Espejo", "servicio" => "Metropolitano Sur" ],
                    [ "code" => 13117, "name" => "Lo Prado", "servicio" => "Metropolitano Occidente" ],
                    [ "code" => 13118, "name" => "Macul", "servicio" => "Metropolitano Oriente" ],
                    [ "code" => 13119, "name" => "Maipú", "servicio" => "Metropolitano Central" ],
                    [ "code" => 13120, "name" => "Ñuñoa", "servicio" => "Metropolitano Oriente" ],
                    [ "code" => 13121, "name" => "Pedro Aguirre Cerda", "servicio" => "Metropolitano Sur" ],
                    [ "code" => 13122, "name" => "Peñalolén", "servicio" => "Metropolitano Oriente" ],
                    [ "code" => 13123, "name" => "Providencia", "servicio" => "Metropolitano Oriente" ],
                    [ "code" => 13124, "name" => "Pudahuel", "servicio" => "Metropolitano Occidente" ],
                    [ "code" => 13125, "name" => "Quilicura", "servicio" => "Metropolitano Norte" ],
                    [ "code" => 13126, "name" => "Quinta Normal", "servicio" => "Metropolitano Occidente" ],
                    [ "code" => 13127, "name" => "Recoleta", "servicio" => "Metropolitano Norte" ],
                    [ "code" => 13128, "name" => "Renca", "servicio" => "Metropolitano Occidente" ],
                    [ "code" => 13129, "name" => "San Joaquín", "servicio" => "Metropolitano Sur" ],
                    [ "code" => 13130, "name" => "San Miguel", "servicio" => "Metropolitano Sur" ],
                    [ "code" => 13131, "name" => "San Ramón", "servicio" => "Metropolitano Sur Oriente" ],
                    [ "code" => 13132, "name" => "Vitacura", "servicio" => "Metropolitano Oriente" ],
                    [ "code" => 13201, "name" => "Puente Alto", "servicio" => "Metropolitano Sur Oriente" ],
                    [ "code" => 13202, "name" => "Pirque", "servicio" => "Metropolitano Sur Oriente" ],
                    [ "code" => 13203, "name" => "San José de Maipo", "servicio" => "Metropolitano Sur Oriente" ],
                    [ "code" => 13301, "name" => "Colina", "servicio" => "Metropolitano Norte" ],
                    [ "code" => 13302, "name" => "Lampa", "servicio" => "Metropolitano Norte" ],
                    [ "code" => 13303, "name" => "Til Til", "servicio" => "Metropolitano Norte" ],
                    [ "code" => 13401, "name" => "San Bernardo", "servicio" => "Metropolitano Sur" ],
                    [ "code" => 13402, "name" => "Buin", "servicio" => "Metropolitano Sur" ],
                    [ "code" => 13403, "name" => "Calera de Tango", "servicio" => "Metropolitano Sur" ],
                    [ "code" => 13404, "name" => "Paine", "servicio" => "Metropolitano Sur" ],
                    [ "code" => 13501, "name" => "Melipilla", "servicio" => "Metropolitano Occidente" ],
                    [ "code" => 13502, "name" => "Alhué", "servicio" => "Metropolitano Occidente" ],
                    [ "code" => 13503, "name" => "Curacaví", "servicio" => "Metropolitano Occidente" ],
                    [ "code" => 13504, "name" => "María Pinto", "servicio" => "Metropolitano Occidente" ],
                    [ "code" => 13505, "name" => "San Pedro", "servicio" => "Metropolitano Occidente" ],
                    [ "code" => 13601, "name" => "Talagante", "servicio" => "Metropolitano Occidente" ],
                    [ "code" => 13602, "name" => "El Monte", "servicio" => "Metropolitano Occidente" ],
                    [ "code" => 13603, "name" => "Isla de Maipo", "servicio" => "Metropolitano Occidente" ],
                    [ "code" => 13604, "name" => "Padre Hurtado", "servicio" => "Metropolitano Occidente" ],
                    [ "code" => 13605, "name" => "Peñaflor", "servicio" => "Metropolitano Occidente" ],
                ];


        $servicios = ServicioSalud::pluck('id', 'name');

        foreach ($comunas as $comuna) {
            $comuna['servicio_id'] = $servicios[$comuna['servicio']];
            unset($comuna['servicio']);
            Comuna::create($comuna);
        }
    }
}
