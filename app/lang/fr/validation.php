<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| Cet following language lines contain the default error messages used by
	| the validator class. Some of these rules have multiple versions such
	| such as the size rules. Feel free to tweak each of these messages.
	|
	*/

	"accepted"         => ":attribute doit être accepté.",
	"active_url"       => "Le format de :attribute n'est pas celui d'une URL valide.",
	"after"            => "La date :attribute doit être postérieure à :date.",
	"alpha"            => ":attribute peut seulement contenir des lettres.",
	"alpha_dash"       => ":attribute peut seulement contenir des lettres, des nombres, et des tirets.",
	"alpha_num"        => ":attribute peut seulement contenir des lettres et des nombres.",
	"array"            => ":attribute doit être un tableau.",
	"before"           => "La date :attribute doit être antérieure à :date.",
	"between"          => array(
		"numeric" => "Cet :attribute doit être compris entre :min - :max.",
		"file"    => "Cet :attribute doit être compris entre :min - :max kilobytes.",
		"string"  => "Cet :attribute doit être compris entre :min - :max caractères.",
		"array"   => "Cet :attribute doit avoir entre :min - :max éléments.",
	),
	"confirmed"        => ":attribute ne correspond pas à la confirmation.",
	"date"             => "La date :attribute n'est pas valide.",
	"date_format"      => "La date :attribute ne correspond pas au format :format.",
	"different"        => ":attribute doit être different de :other.",
	"digits"           => "La longueur de :attribute doit être de :digits digits.",
	"digits_between"   => "La longueur de :attribute doit être :min and :max digits.",
	"email"            => "Le format de :attribute est invalide.",
	"exists"           => ":attribute sélectionné est invalide.",
	"image"            => ":attribute doit être une image.",
	"in"               => ":attribute sélectionné est invalide.",
	"integer"          => ":attribute doit être un entier.",
	"ip"               => ":attribute doit être une adresse IP valide.",
	"max"              => array(
		"numeric" => "La taille de :attribute ne doit pas être supérieure à :max.",
		"file"    => "La taille de :attribute ne doit pas être supérieure à :max kilobytes.",
		"string"  => "La longueur de :attribute ne doit pas être supérieure à :max caractères.",
		"array"   => "La taille de :attribute ne doit pas être de plus de :max élements.",
	),
	"mimes"            => ":attribute doit être un fichier de type : :values.",
	"min"              => array(
		"numeric" => "La taille de :attribute doit être d'au moins :min.",
		"file"    => "La taille de :attribute doit être d'au moins :min kilobytes.",
		"string"  => "La longueur de :attribute doit être d'au moins :min caractères.",
		"array"   => "La taille de :attribute doit être d'au moins  :min élements.",
	),
	"not_in"           => ":attribute selectionné est invalide.",
	"numeric"          => ":attribute doit être un nombre.",
	"regex"            => "Le format de cet :attribute est invalide.",
	"required"         => "Le champ :attribute est requis.",
	"required_if"      => "Le champ :attribute est requis quand :other vaut :value.",
	"required_with"    => "Le champ :attribute est requis quand :values est présent.",
	"required_without" => "Le champ :attribute est requis quand :values est absent.",
	"same"             => ":attribute ne correspond pas à :other.",
	"size"             => array(
		"numeric" => "La taille de :attribute doit valoir :size.",
		"file"    => "La taille de :attribute doit valoir :size kilobytes.",
		"string"  => "La longueur de :attribute doit être de :size caractères.",
		"array"   => "La taille de :attribute doit être de :size éléments.",
	),
	"unique"           => "L'attribut :attribute est déjà pris.",
	"url"              => "Le format de :attribute est invalide.",

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| Here you may specify custom validation messages for attributes using the
	| convention "attribute.rule" to name the lines. This makes it quick to
	| specify a specific custom language line for a given attribute rule.
	|
	*/

	'custom' => array(),

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Attributes
	|--------------------------------------------------------------------------
	|
	| Cet following language lines are used to swap attribute place-holders
	| with something more reader friendly such as E-Mail Address instead
	| of "email". This simply helps us make messages a little cleaner.
	|
	*/

	'attributes' => array(),

);
