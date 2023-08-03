<?php

namespace Src\controllers;

use Src\models\BookingModel;

class Booking {

	private function getBookingModel(): BookingModel {
		return new BookingModel();
	}

    public function createBooking(array $booking): array
    {
        return $this->getBookingModel()->createBooking($booking);
    }

	public function getBookings() {
		return $this->getBookingModel()->getBookings();
	}
}