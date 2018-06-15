<?php declare(strict_types = 1);

namespace Apitte\Core\Schema\Builder\Controller;

final class Controller
{

	/** @var string */
	private $class;

	/** @var Method[] */
	private $methods = [];

	/** @var string|null */
	private $id;

	/** @var string|null */
	private $path;

	/** @var string[] */
	private $groupIds = [];

	/** @var string[] */
	private $groupPaths = [];

	/** @var string[] */
	private $tags = [];

	public function __construct(string $class)
	{
		$this->class = $class;
	}

	public function getClass(): string
	{
		return $this->class;
	}

	public function getPath(): ?string
	{
		return $this->path;
	}

	public function setPath(?string $path): void
	{
		$this->path = $path;
	}

	/**
	 * @return Method[]
	 */
	public function getMethods(): array
	{
		return $this->methods;
	}

	public function addMethod(string $name): Method
	{
		$method = new Method($name);
		$this->methods[$name] = $method;

		return $method;
	}

	public function getId(): ?string
	{
		return $this->id;
	}

	public function setId(?string $id): void
	{
		$this->id = $id;
	}

	/**
	 * @return mixed[]
	 */
	public function getGroupIds(): array
	{
		return $this->groupIds;
	}

	/**
	 * @param string[] $ids
	 */
	public function setGroupIds(array $ids): void
	{
		$this->groupIds = $ids;
	}

	public function addGroupId(string $id): void
	{
		$this->groupIds[] = $id;
	}

	/**
	 * @return string[]
	 */
	public function getGroupPaths(): array
	{
		return $this->groupPaths;
	}

	public function addGroupPath(string $path): void
	{
		$this->groupPaths[] = $path;
	}

	public function addTag(string $name, string $value): void
	{
		$this->tags[$name] = $value;
	}

	/**
	 * @return string[]
	 */
	public function getTags(): array
	{
		return $this->tags;
	}

}
