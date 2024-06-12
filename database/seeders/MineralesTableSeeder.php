<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MineralesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('minerales')->insert([
            [
                'nombre' => 'Cuarzo',
                'formula' => 'SiO2',
                'categoria' => 'Silicatos',
                'descripcion' => 'Mineral muy común, componente principal de la arena y muchos tipos de rocas.',
                'sistema' => 'Hexagonal',
            ],
            [
                'nombre' => 'Pirita',
                'formula' => 'FeS2',
                'categoria' => 'Sulfuros',
                'descripcion' => 'Conocido como "el oro de los tontos" por su apariencia similar al oro.',
                'sistema' => 'Isométrico',
            ],
            [
                'nombre' => 'Hematita',
                'formula' => 'Fe2O3',
                'categoria' => 'Óxidos',
                'descripcion' => 'Mineral principal del hierro, tiene un color rojizo en polvo.',
                'sistema' => 'Trigonal',
            ],
            [
                'nombre' => 'Calcita',
                'formula' => 'CaCO3',
                'categoria' => 'Carbonatos',
                'descripcion' => 'Forma principal del carbonato de calcio, componente principal del mármol y la caliza.',
                'sistema' => 'Trigonal',
            ],
            [
                'nombre' => 'Galena',
                'formula' => 'PbS',
                'categoria' => 'Sulfuros',
                'descripcion' => 'Principal mena de plomo, muy densa y de color gris plomo.',
                'sistema' => 'Isométrico',
            ],
            [
                'nombre' => 'Fluorita',
                'formula' => 'CaF2',
                'categoria' => 'Haluros',
                'descripcion' => 'Utilizada en la producción de ácido fluorhídrico y en la industria del vidrio.',
                'sistema' => 'Isométrico',
            ],
            [
                'nombre' => 'Magnetita',
                'formula' => 'Fe3O4',
                'categoria' => 'Óxidos',
                'descripcion' => 'Mineral magnético, importante mena de hierro.',
                'sistema' => 'Isométrico',
            ],
            [
                'nombre' => 'Yeso',
                'formula' => 'CaSO4·2H2O',
                'categoria' => 'Sulfatos',
                'descripcion' => 'Utilizado en la construcción y fabricación de cemento.',
                'sistema' => 'Monoclínico',
            ],
            [
                'nombre' => 'Olivino',
                'formula' => '(Mg, Fe)2SiO4',
                'categoria' => 'Silicatos',
                'descripcion' => 'Mineral común en rocas ígneas máficas y ultramáficas.',
                'sistema' => 'Ortorómbico',
            ],
            [
                'nombre' => 'Turmalina',
                'formula' => 'Complexo',
                'categoria' => 'Silicatos',
                'descripcion' => 'Grupo de minerales con una gran variedad de colores y composiciones.',
                'sistema' => 'Trigonal',
            ],
            [
                'nombre' => 'Cianita',
                'formula' => 'Al2SiO5',
                'categoria' => 'Silicatos',
                'descripcion' => 'Mineral indicativo de alta presión y temperatura.',
                'sistema' => 'Triclínico',
            ],
            [
                'nombre' => 'Rutilo',
                'formula' => 'TiO2',
                'categoria' => 'Óxidos',
                'descripcion' => 'Principal mena de titanio, utilizado en pigmentos blancos.',
                'sistema' => 'Tetragonal',
            ],
            [
                'nombre' => 'Espinela',
                'formula' => 'MgAl2O4',
                'categoria' => 'Óxidos',
                'descripcion' => 'Mineral asociado con rocas metamórficas y algunas ígneas.',
                'sistema' => 'Isométrico',
            ],
            [
                'nombre' => 'Dolomita',
                'formula' => 'CaMg(CO3)2',
                'categoria' => 'Carbonatos',
                'descripcion' => 'Mineral que forma parte de la roca dolomía.',
                'sistema' => 'Trigonal',
            ],
            [
                'nombre' => 'Apatita',
                'formula' => 'Ca5(PO4)3(F, Cl, OH)',
                'categoria' => 'Fosfatos',
                'descripcion' => 'Principal fuente de fósforo, importante para la agricultura.',
                'sistema' => 'Hexagonal',
            ],
            [
                'nombre' => 'Baritina',
                'formula' => 'BaSO4',
                'categoria' => 'Sulfatos',
                'descripcion' => 'Mineral pesado utilizado en la perforación de pozos de petróleo.',
                'sistema' => 'Ortorómbico',
            ],
            [
                'nombre' => 'Halita',
                'formula' => 'NaCl',
                'categoria' => 'Haluros',
                'descripcion' => 'Sal común, importante recurso para la industria química.',
                'sistema' => 'Isométrico',
            ],
            [
                'nombre' => 'Grafito',
                'formula' => 'C',
                'categoria' => 'Elementos nativos',
                'descripcion' => 'Utilizado en lápices y como lubricante.',
                'sistema' => 'Hexagonal',
            ],
            [
                'nombre' => 'Azurita',
                'formula' => 'Cu3(CO3)2(OH)2',
                'categoria' => 'Carbonatos',
                'descripcion' => 'Mineral de cobre de color azul intenso, utilizado como pigmento.',
                'sistema' => 'Monoclínico',
            ],
            [
                'nombre' => 'Malaquita',
                'formula' => 'Cu2(CO3)(OH)2',
                'categoria' => 'Carbonatos',
                'descripcion' => 'Mineral de cobre de color verde, utilizado como piedra ornamental.',
                'sistema' => 'Monoclínico',
            ],
            [
                'nombre' => 'Crisocola',
                'formula' => 'Cu2H2Si2O5(OH)4·nH2O',
                'categoria' => 'Silicatos',
                'descripcion' => 'Mineral de cobre de color verde azulado, a menudo utilizado como gema.',
                'sistema' => 'Ortorómbico',
            ],
            [
                'nombre' => 'Rodocrosita',
                'formula' => 'MnCO3',
                'categoria' => 'Carbonatos',
                'descripcion' => 'Mineral de manganeso de color rosa, utilizado como piedra ornamental.',
                'sistema' => 'Trigonal',
            ],
            [
                'nombre' => 'Realgar',
                'formula' => 'As4S4',
                'categoria' => 'Sulfuros',
                'descripcion' => 'Mineral de arsénico de color rojo intenso, muy tóxico.',
                'sistema' => 'Monoclínico',
            ],
            [
                'nombre' => 'Orpimento',
                'formula' => 'As2S3',
                'categoria' => 'Sulfuros',
                'descripcion' => 'Mineral de arsénico de color amarillo, utilizado históricamente como pigmento.',
                'sistema' => 'Monoclínico',
            ],
            [
                'nombre' => 'Wulfenita',
                'formula' => 'PbMoO4',
                'categoria' => 'Molibdatos',
                'descripcion' => 'Mineral de plomo y molibdeno de color amarillo a naranja.',
                'sistema' => 'Tetragonal',
            ],
            [
                'nombre' => 'Vanadinita',
                'formula' => 'Pb5(VO4)3Cl',
                'categoria' => 'Vanadatos',
                'descripcion' => 'Mineral de plomo y vanadio de color rojo a amarillo.',
                'sistema' => 'Hexagonal',
            ],
            [
                'nombre' => 'Crisoberilo',
                'formula' => 'BeAl2O4',
                'categoria' => 'Óxidos',
                'descripcion' => 'Mineral de berilio y aluminio, a menudo utilizado como gema.',
                'sistema' => 'Ortorómbico',
            ],
            [
                'nombre' => 'Andalucita',
                'formula' => 'Al2SiO5',
                'categoria' => 'Silicatos',
                'descripcion' => 'Mineral indicativo de metamorfismo de baja presión.',
                'sistema' => 'Ortorómbico',
            ],
            [
                'nombre' => 'Crisocola',
                'formula' => 'Cu2H2Si2O5(OH)4·nH2O',
                'categoria' => 'Silicatos',
                'descripcion' => 'Mineral de cobre de color verde azulado, a menudo utilizado como gema.',
                'sistema' => 'Ortorómbico',
            ],
            [
                'nombre' => 'Topacio',
                'formula' => 'Al2SiO4(F,OH)2',
                'categoria' => 'Silicatos',
                'descripcion' => 'Mineral utilizado como gema, disponible en una variedad de colores.',
                'sistema' => 'Ortorrómbico',
            ],
            [
                'nombre' => 'Corindón',
                'formula' => 'Al2O3',
                'categoria' => 'Óxidos',
                'descripcion' => 'Mineral muy duro, segundo después del diamante. Variedades gemas incluyen rubí y zafiro.',
                'sistema' => 'Trigonal',
            ],
            [
                'nombre' => 'Cinabrio',
                'formula' => 'HgS',
                'categoria' => 'Sulfuros',
                'descripcion' => 'Principal mena de mercurio, de color rojo brillante.',
                'sistema' => 'Trigonal',
            ],
            [
                'nombre' => 'Celestina',
                'formula' => 'SrSO4',
                'categoria' => 'Sulfatos',
                'descripcion' => 'Fuente principal de estroncio, utilizado en fuegos artificiales y pirotecnia.',
                'sistema' => 'Ortorómbico',
            ],
            [
                'nombre' => 'Enstatita',
                'formula' => 'MgSiO3',
                'categoria' => 'Silicatos',
                'descripcion' => 'Mineral del grupo de los piroxenos, común en meteoritos y rocas ígneas.',
                'sistema' => 'Ortorómbico',
            ],
            [
                'nombre' => 'Hauyna',
                'formula' => 'Na3Ca(Si3Al3)O12(SO4)',
                'categoria' => 'Silicatos',
                'descripcion' => 'Mineral del grupo de las sodalitas, encontrado en rocas ígneas.',
                'sistema' => 'Isométrico',
            ],
            [
                'nombre' => 'Leucita',
                'formula' => 'KAlSi2O6',
                'categoria' => 'Silicatos',
                'descripcion' => 'Mineral común en rocas ígneas volcánicas ricas en potasio.',
                'sistema' => 'Tetragonal',
            ],
            [
                'nombre' => 'Aragonito',
                'formula' => 'CaCO3',
                'categoria' => 'Carbonatos',
                'descripcion' => 'Una de las formas cristalinas del carbonato de calcio, común en depósitos de conchas y corales.',
                'sistema' => 'Ortorómbico',
            ],
            [
                'nombre' => 'Hemimorfita',
                'formula' => 'Zn4Si2O7(OH)2·H2O',
                'categoria' => 'Silicatos',
                'descripcion' => 'Mineral de zinc, encontrado en zonas de oxidación de depósitos de zinc.',
                'sistema' => 'Ortorómbico',
            ]
        ]);
    }
}
