<?php declare(strict_types = 1);

namespace Apitte\Core\Schema;

final class EndpointParameter
{

	public const
		TYPE_SCALAR = 'scalar',
		TYPE_STRING = 'string',
		TYPE_INTEGER = 'int',
		TYPE_FLOAT = 'float',
		TYPE_BOOLEAN = 'bool',
		TYPE_DATETIME = 'datetime',
		TYPE_OBJECT = 'object';

	public const
		IN_QUERY = 'query',
		IN_COOKIE = 'cookie',
		IN_HEADER = 'header',
		IN_PATH = 'path';

	/** @var string|null */
	private $name;

	/** @var string */
	private $type = self::TYPE_SCALAR;

	/** @var string|null */
	private $description;

	/** @var string */
	private $in = self::IN_PATH;

	/** @var bool */
	private $required = true;

	/** @var bool */
	private $deprecated = false;

	/** @var bool */
	private $allowEmpty = false;

	public function getName(): ?string
	{
		return $this->name;
	}

	public function setName(?string $name): void
	{
		$this->name = $name;
	}

	public function getType(): string
	{
		return $this->type;
	}

	public function setType(string $type): void
	{
		$this->type = $type;
	}

	public function getDescription(): ?string
	{
		return $this->description;
	}

	public function setDescription(?string $description): void
	{
		$this->description = $description;
	}

	public function getIn(): string
	{
		return $this->in;
	}

	public function setIn(string $in): void
	{
		$this->in = $in;
	}

	public function isRequired(): bool
	{
		return $this->required;
	}

	public function setRequired(bool $required): void
	{
		$this->required = $required;
	}

	public function isDeprecated(): bool
	{
		return $this->deprecated;
	}

	public function setDeprecated(bool $deprecated): void
	{
		$this->deprecated = $deprecated;
	}

	public function isAllowEmpty(): bool
	{
		return $this->allowEmpty;
	}

	public function setAllowEmpty(bool $allowEmpty): void
	{
		$this->allowEmpty = $allowEmpty;
	}

}
