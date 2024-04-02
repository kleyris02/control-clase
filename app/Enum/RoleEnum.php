<?php

namespace App\Enum;

use Illuminate\Validation\Rules\Enum;

abstract class RoleEnum extends Enum
{
    const ADMIN = 1;

    const DECANA = 2;

    const JEFE = 3;

    const PROFESOR = 4;

    const JEFE_ASIGNATURE = 5;

    const UPDATEUSERS = [
        self::ADMIN,
        self::DECANA,
        self::JEFE,
    ];

    const UPDATEDEPARTAMENTS = [
        self::ADMIN,
        self::DECANA,
    ];

    const ROLES = [
        self::ADMIN => 'Administrator',
        self::DECANA => 'Vicedecana de formación',
        self::JEFE => 'Jefe de departamento',
        self::PROFESOR => 'Profesor',
    ];
}
