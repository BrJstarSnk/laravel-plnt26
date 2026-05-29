<?php

namespace App;

use OpenApi\Attributes as OA;

#[OA\Info(
	version: '1.0.0',
	title: 'API Documentation',
	description: 'Public API documentation.'
)]
class OpenApi
{
	#[OA\Get(
		path: '/api/v1/health', 
		summary: 'Health check',
		tags: ['System'],
		responses: [
			new OA\Response(
				response: 200,
				description: 'OK',
				content: new OA\JsonContent(
					example: ['status' => 'ok']
				)
			)
		]
	)]
	public function health(): void
	{
	}
}
