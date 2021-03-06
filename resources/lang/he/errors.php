<?php
/**
 * Text shown in error messaging.
 */
return [

    // Permissions
    'permission' => 'אין לך הרשאות על מנת לצפות בדף המבוקש.',
    'permissionJson' => 'אין לך הרשאות על מנת לבצע את הפעולה המבוקשת.',

    // Auth
    'error_user_exists_different_creds' => 'משתמש עם המייל :email כבר קיים אך עם פרטי הזדהות שונים',
    'email_already_confirmed' => 'המייל כבר אומת, אנא נסה להתחבר',
    'email_confirmation_invalid' => 'מפתח האימות אינו תקין או שכבר נעשה בו שימוש, אנא נסה להרשם שנית',
    'email_confirmation_expired' => 'מפתח האימות פג-תוקף, מייל אימות חדש נשלח שוב.',
    'ldap_fail_anonymous' => 'LDAP access failed using anonymous bind',
    'ldap_fail_authed' => 'LDAP access failed using given dn & password details',
    'ldap_extension_not_installed' => 'LDAP PHP extension not installed',
    'ldap_cannot_connect' => 'Cannot connect to ldap server, Initial connection failed',
    'social_no_action_defined' => 'לא הוגדרה פעולה',
    'social_login_bad_response' => "Error received during :socialAccount login: \n:error",
    'social_account_in_use' => 'החשבון :socialAccount כבר בשימוש. אנא נסה להתחבר באמצעות אפשרות :socialAccount',
    'social_account_email_in_use' => 'המייל :email כבר נמצא בשימוש. אם כבר יש ברשותך חשבון ניתן להתחבר באמצעות :socialAccount ממסך הגדרות הפרופיל שלך.',
    'social_account_existing' => 'ה - :socialAccount כבר מחובר לחשבון שלך.',
    'social_account_already_used_existing' => 'This :socialAccount account is already used by another user.',
    'social_account_not_used' => 'החשבון :socialAccount אינו מחובר למשתמש כלשהוא. אנא חבר אותו לחשבונך במסך הגדרות הפרופיל שלך.',
    'social_account_register_instructions' => 'אם אין ברשותך חשבון, תוכל להרשם באמצעות :socialAccount',
    'social_driver_not_found' => 'Social driver not found',
    'social_driver_not_configured' => 'הגדרות ה :socialAccount אינן מוגדרות כראוי',

    // System
    'path_not_writable' => 'לא ניתן להעלות את :filePath אנא ודא שניתן לכתוב למיקום זה',
    'cannot_get_image_from_url' => 'לא ניתן לקבל תמונה מ :url',
    'cannot_create_thumbs' => 'The server cannot create thumbnails. Please check you have the GD PHP extension installed.',
    'server_upload_limit' => 'השרת אינו מרשה העלאת קבצים במשקל זה. אנא נסה להעלות קובץ קטן יותר.',
    'uploaded'  => 'השרת אינו מרשה העלאת קבצים במשקל זה. אנא נסה להעלות קובץ קטן יותר.',
    'image_upload_error' => 'התרחשה שגיאה במהלך העלאת התמונה',
    'image_upload_type_error' => 'התמונה שהועלתה אינה תקינה',
    'file_upload_timeout' => 'The file upload has timed out.',

    // Attachments
    'attachment_page_mismatch' => 'Page mismatch during attachment update',
    'attachment_not_found' => 'קובץ מצורף לא נמצא',

    // Pages
    'page_draft_autosave_fail' => 'שגיאה בשמירת הטיוטה. אנא ודא כי חיבור האינטרנט תקין לפני שמירת דף זה.',
    'page_custom_home_deletion' => 'לא ניתן למחוק דף אשר מוגדר כדף הבית',

    // Entities
    'entity_not_found' => 'פריט לא נמצא',
    'bookshelf_not_found' => 'מדף הספרים לא נמצא',
    'book_not_found' => 'ספר לא נמצא',
    'page_not_found' => 'דף לא נמצא',
    'chapter_not_found' => 'פרק לא נמצא',
    'selected_book_not_found' => 'הספר שנבחר לא נמצא',
    'selected_book_chapter_not_found' => 'הפרק או הספר שנבחר לא נמצאו',
    'guests_cannot_save_drafts' => 'אורחים אינם יכולים לשמור סקיצות',

    // Users
    'users_cannot_delete_only_admin' => 'אינך יכול למחוק את המנהל היחיד',
    'users_cannot_delete_guest' => 'אינך יכול למחוק את משתמש האורח',

    // Roles
    'role_cannot_be_edited' => 'לא ניתן לערוך תפקיד זה',
    'role_system_cannot_be_deleted' => 'תפקיד זה הינו תפקיד מערכת ולא ניתן למחיקה',
    'role_registration_default_cannot_delete' => 'לא ניתן למחוק תפקיד זה מכיוון שהוא מוגדר כתפקיד ברירת המחדל בעת הרשמה',
    'role_cannot_remove_only_admin' => 'משתמש זה הינו המשתמש היחיד המשוייך לפקיד המנהל. נסה לשייך את תפקיד המנהל למשתמש נוסף לפני הסרה כאן',

    // Comments
    'comment_list' => 'התרחשה שגיאה בעת שליפת התגובות',
    'cannot_add_comment_to_draft' => 'אינך יכול להוסיף תגובות לסקיצה זו',
    'comment_add' => 'התרחשה שגיאה בעת הוספה / עדכון התגובה',
    'comment_delete' => 'התרחשה שגיאה בעת מחיקת התגובה',
    'empty_comment' => 'לא ניתן להוסיף תגובה ריקה',

    // Error pages
    '404_page_not_found' => 'דף לא קיים',
    'sorry_page_not_found' => 'מצטערים, הדף שחיפשת אינו קיים',
    'return_home' => 'בחזרה לדף הבית',
    'error_occurred' => 'התרחשה שגיאה',
    'app_down' => ':appName כרגע אינו זמין',
    'back_soon' => 'מקווים שיחזור במהרה',

];
