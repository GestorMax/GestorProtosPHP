<?php

namespace GrpcEntryEndpoints;

enum AuthTypes 
{
	case Token;
	case ApiKey;
}

class Metadata {
	public static function get(AuthTypes $authType, String $auth, $entryEndpoint) 
	{
		switch($authType):
			case AuthTypes::ApiKey:
				return [
					'X-Api-Key' => [ strtoupper(md5($auth)) ],
					'EntryEndpoint' => $entryEndpoint, 
				];
				
			case AuthTypes::Token:
				return [
					'authorization' => [ 'Bearer ' . $auth ],
					'EntryEndpoint' => $entryEndpoint, 
				];
		
		endswitch;
	}
}