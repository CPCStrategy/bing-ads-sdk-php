<?php

namespace BingAds\CustomerManagement;

/**
 * Defines the possible secret questions that users can choose from to help them recall their password.
 *
 * @link http://msdn.microsoft.com/en-us/library/bb671980(v=msads.90).aspx SecretQuestion Value Set
 * 
 * @used-by User
 */
final class SecretQuestion
{
    /** Do not specify this value. */
    const None = 'None';
    /** The name of your favorite pet. */
    const FavoritePetsName = 'FavoritePetsName';
    /** The title of your favorite movie. */
    const FavoriteMovie = 'FavoriteMovie';
    /** An anniversary date. */
    const Anniversary = 'Anniversary';
    /** The middle name of your father. */
    const FatherMiddleName = 'FatherMiddleName';
    /** The middle name of your spouse. */
    const SpouseMiddleName = 'SpouseMiddleName';
    /** The middle name of your first child. */
    const FirstChildMiddleName = 'FirstChildMiddleName';
    /** The name of the high school that you attended. */
    const HighSchoolName = 'HighSchoolName';
    /** The name of your favorite teacher. */
    const FavoriteTeacherName = 'FavoriteTeacherName';
    /** The name of your favorite sports team. */
    const FavoriteSportsTeam = 'FavoriteSportsTeam';
}
