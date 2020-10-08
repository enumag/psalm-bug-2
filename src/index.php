<?php declare(strict_types = 1);

use Closure;

final class Arrays
{
	/**
	 * Lorem ipsum.
	 *
	 * @param mixed[]                   $array
	 * @param Closure(mixed): array-key $callback
	 *
	 * @return mixed[]
	 */
	public static function indexBy(array $array, Closure $callback): array
	{
		$result = [];
		foreach ($array as $value) {
			$result[$callback($value)] = $value;
		}

		return $result;
	}
}

