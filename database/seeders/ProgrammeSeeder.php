<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProgrammeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $programme = [
            [
                'intitule_programme' => 'Data science & Intelligence artificielle',
                'description' => 'Formation axée sur l’analyse de données, l’apprentissage automatique, et l’intelligence artificielle.',
                'criteres_admission' => 'Baccalauréat en informatique ou équivalent.',
                'departement_id' => 1
            ],
            [
                'intitule_programme' => 'Génie logiciel',
                'description' => 'Programme dédié à la conception, au développement et à la gestion de logiciels.',
                'criteres_admission' => 'Baccalauréat en informatique ou domaine connexe.',
                'departement_id' => 1
            ],
            [
                'intitule_programme' => 'Géomatique & Développement d\'applications',
                'description' => 'Formation sur les systèmes d’information géographique (SIG) et le développement d’applications liées.',
                'criteres_admission' => 'Baccalauréat en géomatique, informatique, ou équivalent.',
                'departement_id' => 1
            ],
            [
                'intitule_programme' => 'Informatique de Gestion',
                'description' => 'Programme axé sur la gestion des systèmes d’information au sein des entreprises.',
                'criteres_admission' => 'Baccalauréat en gestion, informatique, ou domaine connexe.',
                'departement_id' => 1
            ],
            [
                'intitule_programme' => 'Infographie & Multimédia',
                'description' => 'Formation en création graphique, design multimédia, et production numérique.',
                'criteres_admission' => 'Baccalauréat en arts visuels, design graphique, ou équivalent.',
                'departement_id' => 1
            ],
            [
            'intitule_programme' => 'Réseaux Informatiques',
            'description' => 'Ce programme forme des experts en conception, gestion et optimisation des réseaux informatiques. Les étudiants apprendront les principes fondamentaux des réseaux, la configuration des équipements, et la gestion des infrastructures.',
            'criteres_admission' => 'Diplôme de niveau Bac+2 en informatique ou équivalent. Connaissances de base en réseaux recommandées.',
            'departement_id' => 2
        ],
        [
            'intitule_programme' => 'Réseaux Télécom',
            'description' => 'Ce programme couvre les aspects techniques des réseaux de télécommunications, y compris les systèmes de transmission, la conception des réseaux de télécommunications, et la gestion des services.',
            'criteres_admission' => 'Diplôme de niveau Bac+2 en télécommunications ou en informatique. Compétences en mathématiques et en physique requises.',
            'departement_id' => 2
        ],
        [
            'intitule_programme' => 'Cyber Sécurité',
            'description' => 'Le programme en cyber sécurité forme les étudiants à protéger les systèmes informatiques contre les menaces et les attaques. Il comprend l’analyse de la sécurité, la cryptographie, et les techniques de défense.',
            'criteres_admission' => 'Diplôme de niveau Bac+2 en informatique ou en cybersécurité. Connaissance des systèmes d’exploitation et des réseaux est un plus.',
            'departement_id' => 2
        ],
        [
            'intitule_programme' => 'Systèmes Embarqués et IoT',
            'description' => 'Ce programme se concentre sur les systèmes embarqués et l’internet des objets (IoT). Les étudiants apprendront à concevoir, programmer, et déployer des systèmes embarqués pour diverses applications.',
            'criteres_admission' => 'Diplôme de niveau Bac+2 en électronique, informatique, ou en systèmes embarqués. Compétences en programmation et en électronique sont recommandées.',
            'departement_id' => 2
        ],
        [
            'intitule_programme' => 'Énergies Renouvelables',
            'description' => 'Le programme en énergies renouvelables se focalise sur les technologies et les systèmes associés à la production d’énergie à partir de sources renouvelables, telles que l’énergie solaire, éolienne, et hydraulique.',
            'criteres_admission' => 'Diplôme de niveau Bac+2 en ingénierie, sciences de l’environnement, ou équivalent. Connaissances de base en physique et en ingénierie recommandées.',
            'departement_id'=>2
        ],
        [
            'intitule_programme' => 'Licence en Banque et Finance',
            'description' => 'Formation générale en gestion bancaire et financière, incluant les principes de base de la comptabilité, des marchés financiers et des opérations bancaires.',
            'criteres_admission' => 'Baccalauréat en économie, gestion ou domaine similaire. Bonne maîtrise des mathématiques.',
            'departement_id' => 3
        ],
        [
            'intitule_programme' => 'Master en Finance Internationale',
            'description' => 'Ce programme se concentre sur la finance internationale, avec des cours sur la gestion des devises, les investissements internationaux et la régulation des marchés globaux.',
            'criteres_admission' => 'Licence en finance, économie ou domaine connexe. Connaissances en statistiques et en analyse financière.',
            'departement_id' => 3
        ],
        [
            'intitule_programme' => 'Master en Gestion des Risques Financiers',
            'description' => 'Formation spécialisée dans l’évaluation et la gestion des risques financiers, avec des modules sur la modélisation des risques, les instruments de couverture et la réglementation financière.',
            'criteres_admission' => 'Licence en finance ou en mathématiques appliquées. Expérience ou connaissance préalable en gestion des risques est un plus.',
            'departement_id' => 3
        ],
        [
            'intitule_programme' => 'Certificat en Assurance et Gestion de Patrimoine',
            'description' => 'Certificat de courte durée axé sur les principes de l’assurance, la gestion de patrimoine et les stratégies de planification financière.',
            'criteres_admission' => 'Pas de prérequis spécifiques, mais une expérience ou un intérêt pour le domaine financier est recommandé.',
            'departement_id' => 3
        ],
        [
            'intitule_programme' => 'MBA en Banque et Gestion Financière',
            'description' => 'Programme de MBA avec une spécialisation en banque et gestion financière, visant à développer des compétences en leadership financier, stratégie bancaire et gestion des investissements.',
            'criteres_admission' => 'Diplôme de premier cycle en finance, gestion ou domaine connexe. Expérience professionnelle en finance est fortement recommandée.',
            'departement_id' => 3
        ],
        [
            'intitule_programme' => 'Doctorat en Sciences Financières',
            'description' => 'Programme de doctorat pour la recherche avancée dans le domaine financier, incluant l’analyse des marchés financiers, les théories économiques et les politiques financières.',
            'criteres_admission' => 'Master en finance, économie ou domaine connexe avec une solide expérience en recherche. Propositions de recherche sont nécessaires.',
            'departement_id'=>3
        ],
    
            
        ];
        

        

        DB::table('programmes')->insert($programme);
    }
}
