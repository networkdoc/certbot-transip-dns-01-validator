<?php

namespace RoyBongers\CertbotDns01\Certbot;

class ChallengeRecord
{
    /**
     * Domain (including subdomains) to validate for.
     *
     * @var string
     */
    private $domain;

    /**
     * String containing the subdomain prefix with '_acme-challenge' e.g. "_acme-challenge.sub". Note that the right dot
     * should be trimmed.
     *
     * @var string
     */
    private $recordName;

    /**
     * The unique validation string generated by Let’s Encrypt.
     *
     * @var string
     */
    private $validation;

    /**
     * ChallengeRecord constructor.
     *
     * @param string $domain Domain (including subdomains) to validate for.
     * @param string $recordName String containing the subdomain prefix with '_acme-challenge'.
     * @param string $validation The unique validation string generated by Let’s Encrypt.
     */
    public function __construct(string $domain, string $recordName, string $validation)
    {
        $this->domain = $domain;
        $this->recordName = $recordName;
        $this->validation = $validation;
    }

    public function getDomain(): string
    {
        return $this->domain;
    }

    public function getRecordName(): string
    {
        return $this->recordName;
    }

    public function getValidation(): string
    {
        return $this->validation;
    }
}
