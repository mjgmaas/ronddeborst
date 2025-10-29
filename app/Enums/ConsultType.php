<?php

namespace App\Enums;

enum ConsultType: string
{
    case ObservationPackage1 = 'observation_package_1';
    case ObservationPackage2 = 'observation_package_2';
    case PhoneConsult = 'phone_consult';
    case OfficeConsult = 'office_consult';
    case VideoConsult = 'video_consult';
    case OralExam = 'oral_exam';
    case CenteringFeeding = 'centering_feeding';
    case CenteringFeedingSession3 = 'centering_feeding_session_3';

    public function label(): string
    {
        return match($this) {
            self::ObservationPackage1 => 'Observation moment package 1',
            self::ObservationPackage2 => 'Observation moment package 2',
            self::PhoneConsult => 'Phone consult',
            self::OfficeConsult => 'Office consult',
            self::VideoConsult => 'Video consult',
            self::OralExam => 'Oral exam',
            self::CenteringFeeding => 'Centering feeding',
            self::CenteringFeedingSession3 => 'Centering feeding session 3',
        };
    }
}
