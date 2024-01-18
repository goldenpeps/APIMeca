<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/AutreControllerT' => [
            [['_route' => 'monTypeT.GetAll', '_controller' => 'App\\Controller\\AutreController::GetAllType'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'monTypeT.Create', '_controller' => 'App\\Controller\\AutreController::creatModelsTest'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/ContractController' => [
            [['_route' => 'Contract.GetAll', '_controller' => 'App\\Controller\\ContratController::GetContratAll'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'ContractController.Create', '_controller' => 'App\\Controller\\ContratController::createContrat'], null, ['POST' => 0], null, false, false, null],
        ],
        '/contratEtPiece' => [
            [['_route' => 'app_contrat_piece_get_all', '_controller' => 'App\\Controller\\ContratPieceController::getAll'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'app_contrat_piece_post', '_controller' => 'App\\Controller\\ContratPieceController::create'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'app_contrat_piece_delete', '_controller' => 'App\\Controller\\ContratPieceController::delete'], null, ['DELETE' => 0], null, false, false, null],
        ],
        '/dowload/files' => [[['_route' => 'app.index', '_controller' => 'App\\Controller\\DowloadFilesController::index'], null, null, null, false, false, null]],
        '/api/files' => [[['_route' => 'app_dowload_files', '_controller' => 'App\\Controller\\DowloadFilesController::createFile'], null, ['POST' => 0], null, false, false, null]],
        '/api/marqueController' => [
            [['_route' => 'marqueVehicule.GetAll', '_controller' => 'App\\Controller\\MarqueVehiculeController::GetAllMarque'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'marqueVehicule.Create', '_controller' => 'App\\Controller\\MarqueVehiculeController::createMarqueVehicule'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/modeleVehiculeController' => [
            [['_route' => 'ModeleVehicule.GetAll', '_controller' => 'App\\Controller\\ModeleVehiculeController::GetModeleVehiculeAll'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'ModeleVehicule.Create', '_controller' => 'App\\Controller\\ModeleVehiculeController::createModeleVehicule'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/monControllerT' => [
            [['_route' => 'modeleTests.GetAll', '_controller' => 'App\\Controller\\MonController::GetAllModele'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'modeleTests.Create', '_controller' => 'App\\Controller\\MonController::creatModelsTest'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/PieceController' => [
            [['_route' => 'Pieces.GetAll', '_controller' => 'App\\Controller\\PieceController::GetAllPiece'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'Pieces.Create', '_controller' => 'App\\Controller\\PieceController::createPiece'], null, ['POST' => 0], null, false, false, null],
        ],
        '/PieceEtModele' => [
            [['_route' => 'app_piece_modele_get_all', '_controller' => 'App\\Controller\\PieceModeleController::getAll'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'app_modele_piece_post', '_controller' => 'App\\Controller\\PieceModeleController::create'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'app_modele_piece_delete', '_controller' => 'App\\Controller\\PieceModeleController::delete'], null, ['DELETE' => 0], null, false, false, null],
        ],
        '/api/TypePieceController' => [
            [['_route' => 'TypePieces.GetAll', '_controller' => 'App\\Controller\\TypePieceController::GetAllTypePiece'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'TypePiece.Create', '_controller' => 'App\\Controller\\TypePieceController::createPiece'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/UtilisateurMecanoController' => [
            [['_route' => 'UtilisateurMecano.GetAll', '_controller' => 'App\\Controller\\UtilisateurMecanoController::GetAllUtilisateurMecano'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'UtilisateurMecano.Create', '_controller' => 'App\\Controller\\UtilisateurMecanoController::createUtilisateurMecano'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/login_check' => [[['_route' => 'api_login_check'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/api/(?'
                    .'|AutreControllerT/([^/]++)(?'
                        .'|(*:78)'
                    .')'
                    .'|ContractController/([^/]++)(?'
                        .'|(*:116)'
                    .')'
                    .'|m(?'
                        .'|arqueController/([^/]++)(?'
                            .'|(*:156)'
                        .')'
                        .'|o(?'
                            .'|deleVehiculeController/([^/]++)(?'
                                .'|(*:203)'
                            .')'
                            .'|nControllerT/([^/]++)(?'
                                .'|(*:236)'
                            .')'
                        .')'
                    .')'
                    .'|PieceController/([^/]++)(?'
                        .'|(*:274)'
                    .')'
                    .'|TypePieceController/([^/]++)(?'
                        .'|(*:314)'
                    .')'
                    .'|UtilisateurMecano(?'
                        .'|Controller/([^/]++)(?'
                            .'|(*:365)'
                        .')'
                        .'|/([^/]++)(*:383)'
                    .')'
                .')'
                .'|/contratEtPiece/([^/]++)/([^/]++)(*:426)'
                .'|/PieceEtModele/([^/]++)/([^/]++)(*:466)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        78 => [
            [['_route' => 'monTypeT.Get', '_controller' => 'App\\Controller\\AutreController::GetModeleUnique'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'monTypeT.delete', '_controller' => 'App\\Controller\\AutreController::deleteModeleUnique'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'monTypeT.update', '_controller' => 'App\\Controller\\AutreController::updateModeleUnique'], ['id'], ['PATCH' => 0, 'PUT' => 1], null, false, true, null],
        ],
        116 => [
            [['_route' => 'Contract.Get', '_controller' => 'App\\Controller\\ContratController::GetContrat'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'ContractController.delete', '_controller' => 'App\\Controller\\ContratController::deleteContrat'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'ContractController.update', '_controller' => 'App\\Controller\\ContratController::updateUtilisateurMecano'], ['id'], ['PATCH' => 0, 'PUT' => 1], null, false, true, null],
        ],
        156 => [
            [['_route' => 'marqueVehicule.Get', '_controller' => 'App\\Controller\\MarqueVehiculeController::GetUneMarqueVehicule'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'marqueVehicule.delete', '_controller' => 'App\\Controller\\MarqueVehiculeController::deleteMarqueVehicule'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'marqueVehicule.update', '_controller' => 'App\\Controller\\MarqueVehiculeController::updateMarqueVehicule'], ['id'], ['PATCH' => 0, 'PUT' => 1], null, false, true, null],
        ],
        203 => [
            [['_route' => 'ModeleVehicule.Get', '_controller' => 'App\\Controller\\ModeleVehiculeController::GetModeleVehicule'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'ModeleVehicule.delete', '_controller' => 'App\\Controller\\ModeleVehiculeController::deleteModeleVehicule'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'ModeleVehicule.update', '_controller' => 'App\\Controller\\ModeleVehiculeController::updatePiece'], ['id'], ['PATCH' => 0, 'PUT' => 1], null, false, true, null],
        ],
        236 => [
            [['_route' => 'modeleTests.Get', '_controller' => 'App\\Controller\\MonController::GetModeleUnique'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'modeleTests.delete', '_controller' => 'App\\Controller\\MonController::deleteModeleUnique'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'modeleTests.update', '_controller' => 'App\\Controller\\MonController::updateModeleUnique'], ['id'], ['PATCH' => 0, 'PUT' => 1], null, false, true, null],
        ],
        274 => [
            [['_route' => 'Pieces.Get', '_controller' => 'App\\Controller\\PieceController::GetPiece'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'Pieces.delete', '_controller' => 'App\\Controller\\PieceController::deletePiece'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'Pieces.update', '_controller' => 'App\\Controller\\PieceController::updatePiece'], ['id'], ['PATCH' => 0, 'PUT' => 1], null, false, true, null],
        ],
        314 => [
            [['_route' => 'TypePiece.Get', '_controller' => 'App\\Controller\\TypePieceController::GetUneTypePiece'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'TypePiece.delete', '_controller' => 'App\\Controller\\TypePieceController::deletePiece'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'TypePiece.update', '_controller' => 'App\\Controller\\TypePieceController::updatePiece'], ['id'], ['PATCH' => 0, 'PUT' => 1], null, false, true, null],
        ],
        365 => [
            [['_route' => 'UtilisateurMecano.Get', '_controller' => 'App\\Controller\\UtilisateurMecanoController::GetUneUtilisateurMecano'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'UtilisateurMecano.delete', '_controller' => 'App\\Controller\\UtilisateurMecanoController::deleteUtilisateurMecano'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        383 => [[['_route' => 'UtilisateurMecano.update', '_controller' => 'App\\Controller\\UtilisateurMecanoController::updateMarqueVehicule'], ['id'], ['PATCH' => 0, 'PUT' => 1], null, false, true, null]],
        426 => [[['_route' => 'app_contrat_piece_get', '_controller' => 'App\\Controller\\ContratPieceController::getOne'], ['contratId', 'pieceId'], ['GET' => 0], null, false, true, null]],
        466 => [
            [['_route' => 'app_piece_modele_get_one', '_controller' => 'App\\Controller\\PieceModeleController::getOne'], ['modeleId', 'pieceId'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
