<?php
class Article {

    private int $id;
    private string $title;
    private string $content;
    private string $author;
    private string $posted_at;   

	// Getters and setters generated using https://docs.devsense.com/en/vscode/editor/code-actions

	/**
	 * @return int
	 */
	public function getId(): int {
		return $this->id;
	}
	
	/**
	 * @param int $id 
	 * @return self
	 */
	public function setId(int $id): self {
		$this->id = $id;
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getTitle(): string {
		return $this->title;
	}
	
	/**
	 * @param string $title 
	 * @return self
	 */
	public function setTitle(string $title): self {
		$this->title = $title;
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getContent(): string {
		return $this->content;
	}
	
	/**
	 * @param string $content 
	 * @return self
	 */
	public function setContent(string $content): self {
		$this->content = $content;
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getAuthor(): string {
		return $this->author;
	}
	
	/**
	 * @param string $author 
	 * @return self
	 */
	public function setAuthor(string $author): self {
		$this->author = $author;
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function getPosted_at(): string {
		return $this->posted_at;
	}
	
	/**
	 * @param string $posted_at 
	 * @return self
	 */
	public function setPosted_at(string $posted_at): self {
		$this->posted_at = $posted_at;
		return $this;
	}
}
