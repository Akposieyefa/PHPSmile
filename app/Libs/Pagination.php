<?php

namespace App\Libs;

use PDO;

class Pagination
{
    protected $link;
    protected $total_record_per_page;
    protected $page_no = 1;
    protected $total_record;
    protected $offset;
    protected $self;
    protected $previous_page;
    protected $next_page;
    protected $adjacent;
    protected $second_last;

    public function latest($table, $number)
    {
        $this->total_record_per_page = $number;

        $this->self = $_SERVER['PHP_SELF'];
        if (isset($_GET['page_no']) && $_GET['page_no'] != 0) {
            $this->page_no = $_GET['page_no'];
        } else {
            $this->page_no = 1;
        }

        $this->offset =  ($this->page_no - 1) * $this->total_record_per_page;
        $this->previous_page = $this->page_no -1 ;
        $this->next_page = $this->page_no + 1;
        $this->adjacent = "2";

        $sql = "SELECT COUNT(*) AS total_record FROM $table";
        $stmt = parent::dbConnect()->prepare($sql);
        $stmt->execute();
        $result_count = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->total_record = $result_count;
        $this->total_record =$this->total_record['total_record'];
        $total_no_of_pages = ceil($this->total_record / $this->total_record_per_page);
        $this->second_last = $total_no_of_pages - 1;
        $mainOffset = $this->offset;
        $recordPerPage = $this->total_record_per_page;

        $sql = "SELECT * FROM $table LIMIT $mainOffset ,$recordPerPage";
        $stmt = parent::dbConnect()->prepare($sql);
        $stmt->execute();
        $records = [];
        while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
            extract($result);
            $records[] = $result;
        }
        if ($records) {
            ?>
                <div class="container p-6 mx-auto">
                    <div class="flex justify-center">
                        <?php
                            if ($total_no_of_pages >= $this->total_record_per_page) {
                                for ($counter = 1; $counter <= $total_no_of_pages; $counter++) {
                                    if ($counter == $this->page_no) {
                                        echo "
                                                <a href='/users' class='p-3 no-underline border border-l-0 hover:bg-grey-lighter text-blue-darker'>$counter</a>
                                            ";
                                    } else {
                                        echo "
                                            <a href='/users?page_no=" . $counter . "' class='p-3 no-underline border border-l-0 hover:bg-grey-lighter text-blue-darker'>$counter</a>
                                        ";
                                    }
                                }
                            } ?>
                    </div>
                </div>
            <?php
            return $records;
        }
    }
}
