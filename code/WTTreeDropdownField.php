<?php
/**
 * Extends Tree Dropdown Field {@Link TreeDropdownField} so it works as a subfield of another field
 * Class WTTreeDropdownField
 */
class WTTreeDropdownField extends TreeDropdownField
{

        /**
         * Return a Link to this field
         */
        function Link($action = null) {
                $name = $this->name;

                if (($pos = stripos($name, '[')) !== false) {

                        $name = substr($name, 0, $pos);
                        $action = substr($this->name, $pos + 1, strlen($this->name) - 1 - ($pos + 1)) . 'Tree';
                }

                return Controller::join_links($this->form->FormAction(), 'field/' . $name, $action);
        }
}