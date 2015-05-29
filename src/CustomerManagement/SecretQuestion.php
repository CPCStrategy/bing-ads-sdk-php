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
    const NONE = 'None';
    /** The name of your favorite pet. */
    const FAVORITE_PETS_NAME = 'FavoritePetsName';
    /** The title of your favorite movie. */
    const FAVORITE_MOVIE = 'FavoriteMovie';
    /** An anniversary date. */
    const ANNIVERSARY = 'Anniversary';
    /** The middle name of your father. */
    const FATHER_MIDDLE_NAME = 'FatherMiddleName';
    /** The middle name of your spouse. */
    const SPOUSE_MIDDLE_NAME = 'SpouseMiddleName';
    /** The middle name of your first child. */
    const FIRST_CHILD_MIDDLE_NAME = 'FirstChildMiddleName';
    /** The name of the high school that you attended. */
    const HIGH_SCHOOL_NAME = 'HighSchoolName';
    /** The name of your favorite teacher. */
    const FAVORITE_TEACHER_NAME = 'FavoriteTeacherName';
    /** The name of your favorite sports team. */
    const FAVORITE_SPORTS_TEAM = 'FavoriteSportsTeam';
}
