<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'monTypeT.GetAll' => [[], ['_controller' => 'App\\Controller\\AutreController::GetAllType'], [], [['text', '/api/AutreControllerT']], [], [], []],
    'monTypeT.Get' => [['id'], ['_controller' => 'App\\Controller\\AutreController::GetModeleUnique'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/AutreControllerT']], [], [], []],
    'monTypeT.Create' => [[], ['_controller' => 'App\\Controller\\AutreController::creatModelsTest'], [], [['text', '/api/AutreControllerT']], [], [], []],
    'monTypeT.delete' => [['id'], ['_controller' => 'App\\Controller\\AutreController::deleteModeleUnique'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/AutreControllerT']], [], [], []],
    'monTypeT.update' => [['id'], ['_controller' => 'App\\Controller\\AutreController::updateModeleUnique'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/AutreControllerT']], [], [], []],
    'Contract.GetAll' => [[], ['_controller' => 'App\\Controller\\ContratController::GetContratAll'], [], [['text', '/api/ContractController']], [], [], []],
    'Contract.Get' => [['id'], ['_controller' => 'App\\Controller\\ContratController::GetContrat'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/ContractController']], [], [], []],
    'ContractController.Create' => [[], ['_controller' => 'App\\Controller\\ContratController::createContrat'], [], [['text', '/api/ContractController']], [], [], []],
    'ContractController.delete' => [['id'], ['_controller' => 'App\\Controller\\ContratController::deleteContrat'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/ContractController']], [], [], []],
    'ContractController.update' => [['id'], ['_controller' => 'App\\Controller\\ContratController::updateUtilisateurMecano'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/ContractController']], [], [], []],
    'app_contrat_piece_get_all' => [[], ['_controller' => 'App\\Controller\\ContratPieceController::getAll'], [], [['text', '/contratEtPiece']], [], [], []],
    'app_contrat_piece_get' => [['contratId', 'pieceId'], ['_controller' => 'App\\Controller\\ContratPieceController::getOne'], [], [['variable', '/', '[^/]++', 'pieceId', true], ['variable', '/', '[^/]++', 'contratId', true], ['text', '/contratEtPiece']], [], [], []],
    'app_contrat_piece_post' => [[], ['_controller' => 'App\\Controller\\ContratPieceController::create'], [], [['text', '/contratEtPiece']], [], [], []],
    'app_contrat_piece_delete' => [[], ['_controller' => 'App\\Controller\\ContratPieceController::delete'], [], [['text', '/contratEtPiece']], [], [], []],
    'marqueVehicule.GetAll' => [[], ['_controller' => 'App\\Controller\\MarqueVehiculeController::GetAllMarque'], [], [['text', '/api/marqueController']], [], [], []],
    'marqueVehicule.Get' => [['id'], ['_controller' => 'App\\Controller\\MarqueVehiculeController::GetUneMarqueVehicule'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/marqueController']], [], [], []],
    'marqueVehicule.Create' => [[], ['_controller' => 'App\\Controller\\MarqueVehiculeController::createMarqueVehicule'], [], [['text', '/api/marqueController']], [], [], []],
    'marqueVehicule.delete' => [['id'], ['_controller' => 'App\\Controller\\MarqueVehiculeController::deleteMarqueVehicule'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/marqueController']], [], [], []],
    'marqueVehicule.update' => [['id'], ['_controller' => 'App\\Controller\\MarqueVehiculeController::updateMarqueVehicule'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/marqueController']], [], [], []],
    'ModeleVehicule.GetAll' => [[], ['_controller' => 'App\\Controller\\ModeleVehiculeController::GetModeleVehiculeAll'], [], [['text', '/api/modeleVehiculeController']], [], [], []],
    'ModeleVehicule.Get' => [['id'], ['_controller' => 'App\\Controller\\ModeleVehiculeController::GetModeleVehicule'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/modeleVehiculeController']], [], [], []],
    'ModeleVehicule.Create' => [[], ['_controller' => 'App\\Controller\\ModeleVehiculeController::createModeleVehicule'], [], [['text', '/api/modeleVehiculeController']], [], [], []],
    'ModeleVehicule.delete' => [['id'], ['_controller' => 'App\\Controller\\ModeleVehiculeController::deleteModeleVehicule'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/modeleVehiculeController']], [], [], []],
    'ModeleVehicule.update' => [['id'], ['_controller' => 'App\\Controller\\ModeleVehiculeController::updatePiece'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/modeleVehiculeController']], [], [], []],
    'modeleTests.GetAll' => [[], ['_controller' => 'App\\Controller\\MonController::GetAllModele'], [], [['text', '/api/monControllerT']], [], [], []],
    'modeleTests.Get' => [['id'], ['_controller' => 'App\\Controller\\MonController::GetModeleUnique'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/monControllerT']], [], [], []],
    'modeleTests.Create' => [[], ['_controller' => 'App\\Controller\\MonController::creatModelsTest'], [], [['text', '/api/monControllerT']], [], [], []],
    'modeleTests.delete' => [['id'], ['_controller' => 'App\\Controller\\MonController::deleteModeleUnique'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/monControllerT']], [], [], []],
    'modeleTests.update' => [['id'], ['_controller' => 'App\\Controller\\MonController::updateModeleUnique'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/monControllerT']], [], [], []],
    'Pieces.GetAll' => [[], ['_controller' => 'App\\Controller\\PieceController::GetAllPiece'], [], [['text', '/api/PieceController']], [], [], []],
    'Pieces.Get' => [['id'], ['_controller' => 'App\\Controller\\PieceController::GetPiece'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/PieceController']], [], [], []],
    'Pieces.Create' => [[], ['_controller' => 'App\\Controller\\PieceController::createPiece'], [], [['text', '/api/PieceController']], [], [], []],
    'Pieces.delete' => [['id'], ['_controller' => 'App\\Controller\\PieceController::deletePiece'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/PieceController']], [], [], []],
    'Pieces.update' => [['id'], ['_controller' => 'App\\Controller\\PieceController::updatePiece'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/PieceController']], [], [], []],
    'app_piece_modele_get_all' => [[], ['_controller' => 'App\\Controller\\PieceModeleController::getAll'], [], [['text', '/PieceEtModele']], [], [], []],
    'app_modele_piece_post' => [[], ['_controller' => 'App\\Controller\\PieceModeleController::create'], [], [['text', '/PieceEtModele']], [], [], []],
    'app_modele_piece_delete' => [[], ['_controller' => 'App\\Controller\\PieceModeleController::delete'], [], [['text', '/PieceEtModele']], [], [], []],
    'app_piece_modele_get_one' => [['modeleId', 'pieceId'], ['_controller' => 'App\\Controller\\PieceModeleController::getOne'], [], [['variable', '/', '[^/]++', 'pieceId', true], ['variable', '/', '[^/]++', 'modeleId', true], ['text', '/PieceEtModele']], [], [], []],
    'TypePieces.GetAll' => [[], ['_controller' => 'App\\Controller\\TypePieceController::GetAllTypePiece'], [], [['text', '/api/TypePieceController']], [], [], []],
    'TypePiece.Get' => [['id'], ['_controller' => 'App\\Controller\\TypePieceController::GetUneTypePiece'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/TypePieceController']], [], [], []],
    'TypePiece.Create' => [[], ['_controller' => 'App\\Controller\\TypePieceController::createPiece'], [], [['text', '/api/TypePieceController']], [], [], []],
    'TypePiece.delete' => [['id'], ['_controller' => 'App\\Controller\\TypePieceController::deletePiece'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/TypePieceController']], [], [], []],
    'TypePiece.update' => [['id'], ['_controller' => 'App\\Controller\\TypePieceController::updatePiece'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/TypePieceController']], [], [], []],
    'UtilisateurMecano.GetAll' => [[], ['_controller' => 'App\\Controller\\UtilisateurMecanoController::GetAllUtilisateurMecano'], [], [['text', '/api/UtilisateurMecanoController']], [], [], []],
    'UtilisateurMecano.Get' => [['id'], ['_controller' => 'App\\Controller\\UtilisateurMecanoController::GetUneUtilisateurMecano'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/UtilisateurMecanoController']], [], [], []],
    'UtilisateurMecano.Create' => [[], ['_controller' => 'App\\Controller\\UtilisateurMecanoController::createUtilisateurMecano'], [], [['text', '/api/UtilisateurMecanoController']], [], [], []],
    'UtilisateurMecano.delete' => [['id'], ['_controller' => 'App\\Controller\\UtilisateurMecanoController::deleteUtilisateurMecano'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/UtilisateurMecanoController']], [], [], []],
    'UtilisateurMecano.update' => [['id'], ['_controller' => 'App\\Controller\\UtilisateurMecanoController::updateMarqueVehicule'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/UtilisateurMecano']], [], [], []],
    'api_login_check' => [[], [], [], [['text', '/api/login_check']], [], [], []],
    'App\Controller\AutreController::GetAllType' => [[], ['_controller' => 'App\\Controller\\AutreController::GetAllType'], [], [['text', '/api/AutreControllerT']], [], [], []],
    'App\Controller\AutreController::GetModeleUnique' => [['id'], ['_controller' => 'App\\Controller\\AutreController::GetModeleUnique'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/AutreControllerT']], [], [], []],
    'App\Controller\AutreController::creatModelsTest' => [[], ['_controller' => 'App\\Controller\\AutreController::creatModelsTest'], [], [['text', '/api/AutreControllerT']], [], [], []],
    'App\Controller\AutreController::deleteModeleUnique' => [['id'], ['_controller' => 'App\\Controller\\AutreController::deleteModeleUnique'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/AutreControllerT']], [], [], []],
    'App\Controller\AutreController::updateModeleUnique' => [['id'], ['_controller' => 'App\\Controller\\AutreController::updateModeleUnique'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/AutreControllerT']], [], [], []],
    'App\Controller\ContratController::GetContratAll' => [[], ['_controller' => 'App\\Controller\\ContratController::GetContratAll'], [], [['text', '/api/ContractController']], [], [], []],
    'App\Controller\ContratController::GetContrat' => [['id'], ['_controller' => 'App\\Controller\\ContratController::GetContrat'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/ContractController']], [], [], []],
    'App\Controller\ContratController::createContrat' => [[], ['_controller' => 'App\\Controller\\ContratController::createContrat'], [], [['text', '/api/ContractController']], [], [], []],
    'App\Controller\ContratController::deleteContrat' => [['id'], ['_controller' => 'App\\Controller\\ContratController::deleteContrat'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/ContractController']], [], [], []],
    'App\Controller\ContratController::updateUtilisateurMecano' => [['id'], ['_controller' => 'App\\Controller\\ContratController::updateUtilisateurMecano'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/ContractController']], [], [], []],
    'App\Controller\ContratPieceController::getAll' => [[], ['_controller' => 'App\\Controller\\ContratPieceController::getAll'], [], [['text', '/contratEtPiece']], [], [], []],
    'App\Controller\ContratPieceController::getOne' => [['contratId', 'pieceId'], ['_controller' => 'App\\Controller\\ContratPieceController::getOne'], [], [['variable', '/', '[^/]++', 'pieceId', true], ['variable', '/', '[^/]++', 'contratId', true], ['text', '/contratEtPiece']], [], [], []],
    'App\Controller\ContratPieceController::create' => [[], ['_controller' => 'App\\Controller\\ContratPieceController::create'], [], [['text', '/contratEtPiece']], [], [], []],
    'App\Controller\ContratPieceController::delete' => [[], ['_controller' => 'App\\Controller\\ContratPieceController::delete'], [], [['text', '/contratEtPiece']], [], [], []],
    'App\Controller\MarqueVehiculeController::GetAllMarque' => [[], ['_controller' => 'App\\Controller\\MarqueVehiculeController::GetAllMarque'], [], [['text', '/api/marqueController']], [], [], []],
    'App\Controller\MarqueVehiculeController::GetUneMarqueVehicule' => [['id'], ['_controller' => 'App\\Controller\\MarqueVehiculeController::GetUneMarqueVehicule'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/marqueController']], [], [], []],
    'App\Controller\MarqueVehiculeController::createMarqueVehicule' => [[], ['_controller' => 'App\\Controller\\MarqueVehiculeController::createMarqueVehicule'], [], [['text', '/api/marqueController']], [], [], []],
    'App\Controller\MarqueVehiculeController::deleteMarqueVehicule' => [['id'], ['_controller' => 'App\\Controller\\MarqueVehiculeController::deleteMarqueVehicule'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/marqueController']], [], [], []],
    'App\Controller\MarqueVehiculeController::updateMarqueVehicule' => [['id'], ['_controller' => 'App\\Controller\\MarqueVehiculeController::updateMarqueVehicule'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/marqueController']], [], [], []],
    'App\Controller\ModeleVehiculeController::GetModeleVehiculeAll' => [[], ['_controller' => 'App\\Controller\\ModeleVehiculeController::GetModeleVehiculeAll'], [], [['text', '/api/modeleVehiculeController']], [], [], []],
    'App\Controller\ModeleVehiculeController::GetModeleVehicule' => [['id'], ['_controller' => 'App\\Controller\\ModeleVehiculeController::GetModeleVehicule'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/modeleVehiculeController']], [], [], []],
    'App\Controller\ModeleVehiculeController::createModeleVehicule' => [[], ['_controller' => 'App\\Controller\\ModeleVehiculeController::createModeleVehicule'], [], [['text', '/api/modeleVehiculeController']], [], [], []],
    'App\Controller\ModeleVehiculeController::deleteModeleVehicule' => [['id'], ['_controller' => 'App\\Controller\\ModeleVehiculeController::deleteModeleVehicule'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/modeleVehiculeController']], [], [], []],
    'App\Controller\ModeleVehiculeController::updatePiece' => [['id'], ['_controller' => 'App\\Controller\\ModeleVehiculeController::updatePiece'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/modeleVehiculeController']], [], [], []],
    'App\Controller\MonController::GetAllModele' => [[], ['_controller' => 'App\\Controller\\MonController::GetAllModele'], [], [['text', '/api/monControllerT']], [], [], []],
    'App\Controller\MonController::GetModeleUnique' => [['id'], ['_controller' => 'App\\Controller\\MonController::GetModeleUnique'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/monControllerT']], [], [], []],
    'App\Controller\MonController::creatModelsTest' => [[], ['_controller' => 'App\\Controller\\MonController::creatModelsTest'], [], [['text', '/api/monControllerT']], [], [], []],
    'App\Controller\MonController::deleteModeleUnique' => [['id'], ['_controller' => 'App\\Controller\\MonController::deleteModeleUnique'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/monControllerT']], [], [], []],
    'App\Controller\MonController::updateModeleUnique' => [['id'], ['_controller' => 'App\\Controller\\MonController::updateModeleUnique'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/monControllerT']], [], [], []],
    'App\Controller\PieceController::GetAllPiece' => [[], ['_controller' => 'App\\Controller\\PieceController::GetAllPiece'], [], [['text', '/api/PieceController']], [], [], []],
    'App\Controller\PieceController::GetPiece' => [['id'], ['_controller' => 'App\\Controller\\PieceController::GetPiece'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/PieceController']], [], [], []],
    'App\Controller\PieceController::createPiece' => [[], ['_controller' => 'App\\Controller\\PieceController::createPiece'], [], [['text', '/api/PieceController']], [], [], []],
    'App\Controller\PieceController::deletePiece' => [['id'], ['_controller' => 'App\\Controller\\PieceController::deletePiece'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/PieceController']], [], [], []],
    'App\Controller\PieceController::updatePiece' => [['id'], ['_controller' => 'App\\Controller\\PieceController::updatePiece'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/PieceController']], [], [], []],
    'App\Controller\PieceModeleController::getAll' => [[], ['_controller' => 'App\\Controller\\PieceModeleController::getAll'], [], [['text', '/PieceEtModele']], [], [], []],
    'App\Controller\PieceModeleController::create' => [[], ['_controller' => 'App\\Controller\\PieceModeleController::create'], [], [['text', '/PieceEtModele']], [], [], []],
    'App\Controller\PieceModeleController::delete' => [[], ['_controller' => 'App\\Controller\\PieceModeleController::delete'], [], [['text', '/PieceEtModele']], [], [], []],
    'App\Controller\PieceModeleController::getOne' => [['modeleId', 'pieceId'], ['_controller' => 'App\\Controller\\PieceModeleController::getOne'], [], [['variable', '/', '[^/]++', 'pieceId', true], ['variable', '/', '[^/]++', 'modeleId', true], ['text', '/PieceEtModele']], [], [], []],
    'App\Controller\TypePieceController::GetAllTypePiece' => [[], ['_controller' => 'App\\Controller\\TypePieceController::GetAllTypePiece'], [], [['text', '/api/TypePieceController']], [], [], []],
    'App\Controller\TypePieceController::GetUneTypePiece' => [['id'], ['_controller' => 'App\\Controller\\TypePieceController::GetUneTypePiece'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/TypePieceController']], [], [], []],
    'App\Controller\TypePieceController::createPiece' => [[], ['_controller' => 'App\\Controller\\TypePieceController::createPiece'], [], [['text', '/api/TypePieceController']], [], [], []],
    'App\Controller\TypePieceController::deletePiece' => [['id'], ['_controller' => 'App\\Controller\\TypePieceController::deletePiece'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/TypePieceController']], [], [], []],
    'App\Controller\TypePieceController::updatePiece' => [['id'], ['_controller' => 'App\\Controller\\TypePieceController::updatePiece'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/TypePieceController']], [], [], []],
    'App\Controller\UtilisateurMecanoController::GetAllUtilisateurMecano' => [[], ['_controller' => 'App\\Controller\\UtilisateurMecanoController::GetAllUtilisateurMecano'], [], [['text', '/api/UtilisateurMecanoController']], [], [], []],
    'App\Controller\UtilisateurMecanoController::GetUneUtilisateurMecano' => [['id'], ['_controller' => 'App\\Controller\\UtilisateurMecanoController::GetUneUtilisateurMecano'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/UtilisateurMecanoController']], [], [], []],
    'App\Controller\UtilisateurMecanoController::createUtilisateurMecano' => [[], ['_controller' => 'App\\Controller\\UtilisateurMecanoController::createUtilisateurMecano'], [], [['text', '/api/UtilisateurMecanoController']], [], [], []],
    'App\Controller\UtilisateurMecanoController::deleteUtilisateurMecano' => [['id'], ['_controller' => 'App\\Controller\\UtilisateurMecanoController::deleteUtilisateurMecano'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/UtilisateurMecanoController']], [], [], []],
    'App\Controller\UtilisateurMecanoController::updateMarqueVehicule' => [['id'], ['_controller' => 'App\\Controller\\UtilisateurMecanoController::updateMarqueVehicule'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/UtilisateurMecano']], [], [], []],
];
